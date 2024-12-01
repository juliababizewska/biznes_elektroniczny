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
    def __init__(self,name,code,image_name):
        self.name=name
        self.code = code
        self.image_name = image_name


Categories = []
Categories_URLs = []
def getCategories(page):
    categories_ul = page.find('ul',{'class':"nav nav-stacked"})
    for a in categories_ul.find_all('a',href=True):
        category_url = a['href']
        category_name=a.get_text(strip=True)
        Categories.append(category_name)
        Categories_URLs.append(category_url)
    
    for i,x in enumerate(Categories):
        print(Categories_URLs[i]," ",x)


Subcategories = []
Subcategories_URLs = []
def getSubcategories(page):
    subcategories_ul = page.find('ul',{'class':"nav nav-stacked"})
    for a in subcategories_ul.find_all('a',href=True):
        subcategory_url = a['href']
        subcategory_name=a.get_text(strip=True)
        Subcategories.append(subcategory_name)
        Subcategories_URLs.append(subcategory_url)

    for i,x in enumerate(Subcategories):
            print(Subcategories_URLs[i]," ",x)
    
ProductsPages_URLs = []
def getProductsPages(page):
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


# Function to scrap product's info
def getProduct(page):
    if page.find('h1',{"itemprop":"name"}) == None:
        # print('zero essy brosky')
        return
        
    # Find product's name
    name = page.find('h1',{"itemprop":"name"}).text
    #print(name)

    # Find product's unique code
    code = page.find('span',{"class":"product_code"}).text
    #print(code)

    # Find product's image URL address
    imgSrc = page.find('img',{"itemprop":"image"})['src']
    imgUrl = URL + imgSrc
    #print(imgUrl)

    # Download and save image 
    imageName = code + '.jpg'
    urllib.request.urlretrieve(imgUrl, PATH/IMAGES_FOLDER/imageName)
    product = Product(name,code,imageName)
    Products.append(product)

    
# Function to save Products Array to .CSV file
def saveToCSV(filename):
    with open(filename, mode='w', newline='', encoding='utf-8') as file:
        writer = csv.writer(file)
        writer.writerow(['Name','Code','Filename'])

        for product in Products:
            writer.writerow([product.name,product.code,product.image_name])


# Main function of the script
if __name__ == '__main__':
    main_page = scrapePage(URL)
    getCategories(main_page)

    for category_URL in Categories_URLs:
        page = scrapePage(URL + category_URL)
        getSubcategories(page)
    
    for subcategory_url in Subcategories_URLs:
        page = scrapePage(URL + subcategory_url)
        getProductsPages(page)
    
    for product_page_url in ProductsPages_URLs:
        page = scrapePage(URL + product_page_url)
        getProduct(page)
        if len(Products) == 10: 
            saveToCSV("products.csv")   
            break
    


    

    