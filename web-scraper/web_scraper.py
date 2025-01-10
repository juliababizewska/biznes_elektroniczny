# web_scraper.py
# To run this script, paste `python scraper-python.py` in the terminal

# Step I:
#   Find all product pages and get into each of them
# Step II:
#   Get the data from each product's page
# Step III:
#   Save the data to .csv file and download the photo

import requests
from bs4 import BeautifulSoup, SoupStrainer
import csv
import urllib.request
import pathlib
import httplib2
import re
import os

# Base Website URL
URL = "https://fastryga.pl/"

# Path to the current used folder
PATH = pathlib.Path().resolve()

# Name of the folder storing products' images
IMAGES_FOLDER = 'images'

# Global Array of Products
Products = []

# Global Set of Pages' URL addresses
URLs = set()

# Class storaging information about product 
class Product:
    def __init__(self,name,code,image_name1,image_name2,producer,price,description,weight,category,subcategory):
        self.name=name
        self.code = code
        self.image_name1 = image_name1
        self.image_name2 = image_name2
        self.producer = producer
        self.price = price
        self.description = description
        self.weight = weight
        self.category = category
        self.subcategory = subcategory


Categories = []
Categories_URLs = []
def getCategories(page):
    categories_ul = page.find('ul',{'class':"nav nav-stacked"})
    for a in categories_ul.find_all('a',href=True):
        category_url = a['href']
        category_name=a.get_text(strip=True)
        Categories.append(category_name)
        Categories_URLs.append(category_url)
    
    #for i,x in enumerate(Categories):
        #print(Categories_URLs[i]," ",x)



def getSubcategories(page,Subcategories,Subcategories_URLs):
    subcategories_ul = page.find('ul',{'class':"nav nav-stacked"})
    for a in subcategories_ul.find_all('a',href=True):
        subcategory_url = a['href']
        subcategory_name=a.get_text(strip=True)
        if subcategory_name == "Strona główna":
            continue
        Subcategories.append(subcategory_name)
        Subcategories_URLs.append(subcategory_url)

    #for i,x in enumerate(Subcategories):
            #print(Subcategories_URLs[i]," ",x)
    
    return 

def getProductsPages(page,ProductsPages_URLs):
    div = page.find('div',{'id':'full-list'})
    if div == None:
        return
    for a in div.find_all('a',{'class':'product_name'},href=True):
        link = a['href']
        ProductsPages_URLs.append(link)

    

# Add all URLs on the page to the global Set
# Bad strategy! From the home page get all categories, then subcategories (they will be needed latwr anyway!)
def getUrls(url):
    http = httplib2.Http()
    status,response = http.request(URL)

    for link in BeautifulSoup(response, 'html.parser', parse_only=SoupStrainer('a')):
        if link.has_attr('href'):
            if "https:" in link['href']:
                URLs.add(link['href'])
            else:
                URLs.add(URL + link['href'])

# Function to get website's HTML code
def scrapePage(url):
    response = requests.get(url, allow_redirects=False)
    requests.session().max_redirects=100
    response.encoding = 'utf-8'
    soup = BeautifulSoup(response.text, 'html.parser')
    return soup

def download_image(url, save_path):
    try:
        urllib.request.urlretrieve(url, save_path)
        return True
    except Exception as e:
        return False

# Function to scrap product's info
Products = []
def getProduct(url,Category,Subcategory):
    page = scrapePage(url)
    
    if page.find('h1',{"itemprop":"name"}) == None:
        # print('zero essy brosky')
        return
        
    # Find product's name
    name = page.find('h1',{"itemprop":"name"}).text
    #print(name)

    price = page.find('span',{"id":"st_product_options-price-brutto"}).text
    match = re.search(r'\d+,\d',price)
    if match:
        price_str = match.group(0).replace(',','.')
        price = float(price_str)
    
    # Find product's unique code
    code = page.find('span',{"class":"product_code"}).text
    #print(code)

    # Find product's producer
    producer = page.find('a', {"class":"producer_name"})
    if producer:
        producer = producer.text
    else:
        producer = ""

    # Find product's description
    description = page.find('div',{"id":"description-long"}).text

    # Find product's weight in kilograms
    weight = 0.050
    match = re.search(r'(\d+)\s*\w*gram', description, re.IGNORECASE)
    if match:
        # Pobierz liczbę z grupy regex
        weight = int(match.group(1)) / 1000


    # Find product's images URL addresses
    imgSrc1 = page.find('img',{"itemprop":"image"})['src']
    imgUrl1 = URL + imgSrc1
    gallery_divs = page.find_all('div',{"class":"gallery-image"})

    for gallery_div in gallery_divs:
        img2 = gallery_div.find('img',{"class":"img-responsive"},{"alt":""})
        if img2:
            imgSrc2 = img2['src']

            # Big image
            imgSrc2=imgSrc2.replace("gallery_", "big_")
            imgUrl2 = URL + imgSrc2
            if imgUrl2 != imgUrl1:
                break

    # Download and save images
    
    imageName1 = code + '_1.jpg'
    download_image(imgUrl1, PATH / IMAGES_FOLDER / imageName1)
    imageName2 = code + '_2.jpg'
    if imgUrl2:
        if download_image(imgUrl2, PATH/IMAGES_FOLDER/imageName2) != True:
            download_image(imgUrl1, PATH/IMAGES_FOLDER/imageName2)
    else:
        download_image(imgUrl1, PATH/IMAGES_FOLDER/imageName2)

    if imageName1 and imageName2:
        product = Product(name,code,imageName1,imageName2,producer,price,description,weight,Category,Subcategory)
        Products.append(product)

    
# Function to save Products Array to .CSV file
def saveToCSV(filename,Products):
    with open(filename, mode='w', newline='', encoding='utf-8') as file:
        writer = csv.writer(file)
        writer.writerow(['Name','Description','Code','Producer','Price', 'Weight','Photo_1','Photo_2','Category','Subcategory'])

        if not Products:
            return
        
        for product in Products:
            writer.writerow([
                product.name,
                product.description,
                product.code,
                product.producer,
                product.price,
                product.weight,
                product.image_name1,
                product.image_name2,
                product.category,
                product.subcategory])


def sanitize_filename(name):
    return name.replace("/", "").strip()


# Main function of the script
if __name__ == '__main__':

    main_page = scrapePage(URL)
    getCategories(main_page)
    category_subcategories_mapping = {}

    for i,category_URL in enumerate(Categories_URLs):
        category_page = scrapePage(URL + category_URL)
        Subcategories = []
        Subcategories_URLs = []
        getSubcategories(category_page,Subcategories,Subcategories_URLs)

        subcategories_and_products_mapping = {}

        for j,subcategory_url in enumerate(Subcategories_URLs):
            ProductsPages_URLs = []
            subcategory_page = scrapePage(URL + subcategory_url)
            getProductsPages(subcategory_page,ProductsPages_URLs)
            counter = 0
            for product_page_url in ProductsPages_URLs:
                product = getProduct(URL + product_page_url,Categories[i],Subcategories[j])
                counter += 1
                if counter > 20:
                    break


        category_subcategories_mapping[Categories[i]] = Subcategories
    
    saveToCSV("data.csv",Products)


    with open('categories_and_subcategories.txt', 'w', encoding='utf-8') as file:
        for category, subcategories in category_subcategories_mapping.items():
            # Create the line with category and its subcategories
            line = category + "," + ",".join(subcategories) + "\n"
            file.write(line)
            file.write('\n''\n')


    

    