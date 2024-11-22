import requests
from requests.auth import HTTPBasicAuth
import urllib3
import xml.etree.ElementTree as ET
from xml.sax.saxutils import escape
import csv
import html


# Krok 1: Wczytanie kategorii i podkategorii z pliku, stworzenie mappowania oraz przypisanie wszystkim odpowiedni indeks zaczynajac od ustalonego (autoinkrementacja)
# Krok 2: Wrzucenie kategorii poprzez REST API
# Krok 3: Wczytanie wszystkich produktów i przesłanie ich przez REST API do odpowiednich kategorii
# Krok 4: Przypoisanie wszystkim produktom ilości w magazynie 10
# Krok 5: Dodanie zdjęć produktów przez REST API

CATS_LIST_PATH = "web-scraper/web_scraper_data/categories_and_subcategories1.txt"
PRODUCTS_PATH = "web-scraper/web_scraper_data/data.csv"
# Mapowanie podkategoria -> kategoria
sub_to_cat = {}

# Mapowanie kategoria -> id
cat_to_id = {}

# W celu unikniecia duplikatow
processed_categories = set()

# definiujemy w phpMyAdmin -> prestashop-test -> ps_category -> operacje -> AUTO_INCREMENT (uwaga! pierwsze kilka są już wbudowane np. root)
CAT_ID = 3

# tak samo tylko ps_product

PRODUCT_ID = 10
def process_categories(path,create):
    global CAT_ID
    with open(path, 'r', encoding='utf-8') as file:
        lines = file.readlines()

        for line in lines:
            categories = line.split(',')
            if len(categories) < 2:
                continue

            category = categories[0].strip()

            #if category in processed_categories:
             #   continue

            #processed_categories.add(category)

            #cat_to_id[category] = CAT_ID
            category_id = CAT_ID
            CAT_ID += 1
            if create == True:
                create_category(name=category)
            

            subcategories = categories[1:]

            for subcategory in subcategories:
                subcategory = subcategory.strip()
                if subcategory in processed_categories:
                    continue

                processed_categories.add(subcategory)
                sub_to_cat[subcategory] = category
                cat_to_id[subcategory] = CAT_ID
                CAT_ID += 1
                
                if create == True:
                    create_category(name=subcategory,parent_id=category_id)

def process_products(path,number=10000):
    global PRODUCT_ID
    with open(path, 'r', encoding='utf-8') as file:
        reader = csv.DictReader(file)
        counter = 0
        for row in reader:
            name = row['Name']
            description = row['Description']
            #description = description.replace("\n"," ").strip()
            description = replace_polish_characters(description).strip()
            description = clean_text(description)
            code = row['Code']
            producer = row['Producer']
            price = row['Price']
            weight = row['Weight']
            photo_1 = row['Photo_1']
            photo_2 = row['Photo_2']
            category = row['Category']
            subcategory = row['Subcategory'].strip()
            if subcategory in cat_to_id:
                cat_id = cat_to_id[subcategory]
                print(cat_id)
                print(subcategory)
                #description="Opis"
            #desc="ANGORA 100% Kolor 01ą abiałySkad: angora 100%Motek 10 gram 50 metrwZalecane druty numer 3-3,5Prbka 10 na 10 cm to 27 oczek i 34 rzczne."
            #desc = desc.strip()
                #cat_id = 16

                create_product(name,description,code,price,weight,cat_id)
                counter += 1
                if counter > number:
                    break
            #update_stock_quantity(PRODUCT_ID)
           # PRODUCT_ID += 1

# Dane autoryzacyjne
API_URL = "https://localhost:8080/api/"
API_KEY = "1N3E674FBU1EP35DL1K21U8Z77PMMBB9"

CERT_PATH = "localhost.pem"

urllib3.disable_warnings(urllib3.exceptions.InsecureRequestWarning)

def replace_polish_characters(text):
    polish_to_ascii = {
        'ą': 'a', 'ć': 'c', 'ę': 'e', 'ł': 'l', 'ń': 'n',
        'ó': 'o', 'ś': 's', 'ź': 'z', 'ż': 'z',
        'Ą': 'A', 'Ć': 'C', 'Ę': 'E', 'Ł': 'L', 'Ń': 'N',
        'Ó': 'O', 'Ś': 'S', 'Ź': 'Z', 'Ż': 'Z'
    }

    return ''.join(polish_to_ascii.get(char, char) for char in text)

def clean_text(text):
    if isinstance(text, bytes):
        text = text.decode('utf-8')
    return text.replace('\xa0', ' ').replace('\xc2', '')

# Funkcja do tworzenia kategorii
def create_category(name,description="", parent_id=2):
    url = f"{API_URL}categories"
    headers = {"Content-Type": "/xml"}

    name_cdata = f"<![CDATA[{escape(name)}]]>"
    description_cdata = f"<![CDATA[{description}]]>"
    link_rewrite = f"<![CDATA[{escape(name.lower().replace(' ', '-'))}]]>"

    data = f"""<?xml version="1.0" encoding="UTF-8"?>
<prestashop xmlns:xlink="http://www.w3.org/1999/xlink">
<category>
    <name>
        <language id="2">{name_cdata}</language>
    </name>
    <link_rewrite>
       <language id="2">{link_rewrite}</language>
    </link_rewrite>
    <description>
        <language id="2">{description_cdata}</language>
    </description>
    <active>1</active>
    <id_parent>{parent_id}</id_parent>
</category>
</prestashop>
"""
    response = requests.post(url, auth=HTTPBasicAuth(API_KEY, ''), data=data.encode('utf-8'), headers=headers,verify=False)
    if response.status_code == 201:
        print(f"Category '{name}' created successfully.")
    else:
        print(f"Error creating category: {response.content} xddd {name}")

# Funkcja do tworzenia produktu
def create_product(name,description,code,price,weight,category_id):
    url = f"{API_URL}products"
    headers = {"Content-Type": "/xml"}
    name_cdata = f"<![CDATA[{escape(name)}]]>"
    description_cdata = f"<![CDATA[{escape(description)}]]>"
    #description_cdata = f"<![CDATA[{escape(description).replace(']]>', ']]]]><![CDATA[>')}]]>"
    print(description_cdata)
    link_rewrite = f"<![CDATA[{escape(name.lower().replace(' ', '-'))}]]>"
    code_cdata = f"<![CDATA[{escape(code)}]]>"
    price_cdata = f"<![CDATA[{escape(price)}]]>"
    weight_cdata = f"<![CDATA[{escape(weight)}]]>"
    
    data = f"""<?xml version="1.0" encoding="UTF-8"?>
<prestashop xmlns:xlink="http://www.w3.org/1999/xlink">
    <product>
        <id_category_default><![CDATA[{category_id}]]></id_category_default>
        <new><![CDATA[1]]></new>
        <id_tax_rules_group><![CDATA[1]]></id_tax_rules_group>
        <type><![CDATA[1]]></type>
        <id_shop_default><![CDATA[1]]></id_shop_default>
        <state><![CDATA[1]]></state>
        <product_type><![CDATA[combinations]]></product_type>
        <price>{price_cdata}</price>
        <unit_price>{price_cdata}</unit_price>
        <active><![CDATA[1]]></active>
        <weight>{weight_cdata}</weight>
        <reference>{code_cdata}</reference>
        <link_rewrite>
            <language id="2">{link_rewrite}</language>
            <language id="1">{link_rewrite}</language>
        </link_rewrite>
        <name>
            <language id="2">{name_cdata}</language>
            <language id="1">{name_cdata}</language>
        </name>
        <description>
            <language id="2">{description_cdata}</language>
            <language id="1">" "</language>
        </description>
        <associations>
            <categories>
                <category>
                    <id><![CDATA[{category_id}]]></id>
                </category>
            </categories>
        </associations>
    </product>
</prestashop>
"""
    response = requests.post(url, auth=HTTPBasicAuth(API_KEY, ''), data=data, headers=headers, verify=False)
    if response.status_code == 201:
        print(f"Product '{name}' created successfully.")
    else:
        print(f"Error creating product: {response.content}")

def update_product_category(product_id, category_id):
    # Fetch the product's current XML
    url = f"{API_URL}products/{product_id}"
    response = requests.get(url, auth=HTTPBasicAuth(API_KEY, ''), verify=False)
    
    if response.status_code != 200:
        print(f"Failed to fetch product {product_id}: {response.content}")
        return
    
    # Parse the XML response
    root = ET.fromstring(response.content)
    
    # Find or create the associations element
    associations = root.find("associations")
    if associations is None:
        associations = ET.SubElement(root, "associations")
    
    # Remove existing categories
    categories = associations.find("categories")
    if categories is not None:
        associations.remove(categories)
    
    # Add the new category
    categories = ET.SubElement(associations, "categories")
    category = ET.SubElement(categories, "category")
    ET.SubElement(category, "id").text = str(category_id)
    
    # Convert the updated XML back to a string
    updated_xml = ET.tostring(root, encoding="utf-8", method="xml").decode("utf-8")
    
    # Send the updated XML back to PrestaShop using PUT
    headers = {"Content-Type": "application/xml"}
    response = requests.put(url, auth=HTTPBasicAuth(API_KEY, ''), data=updated_xml, headers=headers, verify=False)
    
    if response.status_code == 200:
        print(f"Product {product_id} category updated successfully to category ID {category_id}.")
    else:
        print(f"Failed to update product category: {response.content}")

def get_stock_available_id(product_id):
    url = f"{API_URL}stock_availables?filter[id_product]={product_id}&display=full"
    response = requests.get(url, auth=HTTPBasicAuth(API_KEY, ''), verify=False)

    # Check if the response is successful
    if response.status_code == 200:
        # Parse the XML response
        try:
            tree = ET.ElementTree(ET.fromstring(response.content))
            root = tree.getroot()

            # Extract the <id> from the <stock_available> element
            stock_id = root.find(".//id")
            if stock_id is not None:
                return stock_id.text.strip()
            else:
                print(f"No stock ID found for product ID {product_id}")
                return None
        except ET.ParseError as e:
            print(f"Error parsing XML: {str(e)}")
            return None
    else:
        print(f"Error fetching stock for product ID {product_id}: {response.content.decode()}")
        return None



def update_stock_quantity(id, quantity=10):
    stock_id = get_stock_available_id(id)
    url = f"{API_URL}stock_availables/{stock_id}"
    headers = {"Content-Type": "application/xml"}
    
    # Prepare XML data to update the stock quantity
    data = f"""<?xml version="1.0" encoding="UTF-8"?>
<prestashop xmlns:xlink="http://www.w3.org/1999/xlink">
    <stock_available>
        <id><![CDATA[{stock_id}]]></id>
        <id_product xlink:href="http://localhost:8080/api/products/{id}"><![CDATA[{id}]]></id_product>
        <id_product_attribute>
            <![CDATA[0]]>
        </id_product_attribute>

        <quantity><![CDATA[{quantity}]]></quantity>
    </stock_available>
</prestashop>
"""
    
    # Send the PATCH request to update the stock quantity
    response = requests.put(url, auth=HTTPBasicAuth(API_KEY, ''), data=data, headers=headers, verify=False)
    
    if response.status_code == 200:
        print(f"Stock for product ID {stock_id} updated successfully to {quantity}.")
    else:
        print(f"Error updating stock for product ID {stock_id}: {response.content}")


    


        
# Przykład użycia
if __name__ == "__main__":
    # Tworzenie kategorii
    # create_category("Kategoria zajebista", "Opis kategoriixddd")  
    # Tworzenie produktu
    #create_product("Nowy produkt", 99.99, 33)  # '3' to przykładowe ID kategorii
    #set_stock_for_all_products(quantity=10)
    # update_stock_quantity(50)
    
    # set to False if categories were already created and you only need mapping for products
    create = False
    process_categories(CATS_LIST_PATH, create)
    num_of_products = 10000
    process_products(PRODUCTS_PATH,num_of_products)
    #print("Category-to-ID mapping:", cat_to_id)
    
