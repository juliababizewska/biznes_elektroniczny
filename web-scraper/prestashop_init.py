import requests
from requests.auth import HTTPBasicAuth
import urllib3
import xml.etree.ElementTree as ET
from xml.sax.saxutils import escape
from pathlib import Path
import csv
import html


# Krok 1: Wczytanie kategorii i podkategorii z pliku, stworzenie mappowania oraz przypisanie wszystkim odpowiedni indeks zaczynajac od ustalonego (autoinkrementacja)
# Krok 2: Wrzucenie kategorii poprzez REST API
# Krok 3: Wczytanie wszystkich produktów i przesłanie ich przez REST API do odpowiednich kategorii
# Krok 4: Przypoisanie wszystkim produktom ilości w magazynie 10
# Krok 5: Dodanie zdjęć produktów przez REST API

CATS_LIST_PATH = "web_scraper_data/categories_and_subcategories1.txt"
PRODUCTS_PATH = "web_scraper_data/data.csv"
# Mapowanie podkategoria -> kategoria
sub_to_cat = {}

# Mapowanie kategoria -> id
cat_to_id = {}

# W celu unikniecia duplikatow
processed_categories = set()

# definiujemy w phpMyAdmin -> prestashop-test -> ps_category -> operacje -> AUTO_INCREMENT (uwaga! pierwsze kilka są już wbudowane np. root)
CAT_ID = 10

# tak samo tylko ps_product

PRODUCT_ID = 1000
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
    if number == 0:
        return

    with open(path, 'r', encoding='utf-8') as file:
        reader = csv.DictReader(file)
        counter = 0
        for row in reader:
            name = row['Name'].strip()
            description = row['Description']
            #description = description.replace("\n"," ").strip()
            description = description.strip()
            description = replace_polish_characters(description)
            description = clean_text(description)
            description = add_xml_newlines(description)
            #description += "łłł"
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
                
                photo1_path = Path(f"web_scraper_data/images/{code}_1.jpg")
                photo2_path = Path(f"web_scraper_data/images/{code}_2.jpg")
                if photo1_path.exists() and photo2_path.exists():
                    isCreated = create_product(name,description,code,price,weight,cat_id)
                    product_id = get_product_id_by_code(code)
                    uploadPhoto(product_id,code)
                    update_stock_quantity(product_id)
                    PRODUCT_ID += 1

                    counter += 1
                    if counter >= number:
                        break
            #update_stock_quantity(PRODUCT_ID)
           # PRODUCT_ID += 1

# Dane autoryzacyjne
API_URL = "https://localhost:8080/api/"
API_KEY = "1N3E674FBU1EP35DL1K21U8Z77PMMBB9"

CERT_PATH = "localhost.pem"

urllib3.disable_warnings(urllib3.exceptions.InsecureRequestWarning)

def get_product_images(product_id):
    """Fetch all images for a product."""
    url = f"{API_URL}images/products/{product_id}"
    response = requests.get(url, auth=HTTPBasicAuth(API_KEY, ''), verify=False)
    
    if response.status_code == 200:
        # Parse the XML response
        tree = ET.ElementTree(ET.fromstring(response.content))
        root = tree.getroot()
        # Find all <declination> elements under <image>
        image_ids = [declination.attrib['id'] for declination in root.findall(".//declination")]
        return image_ids
    else:
        print(f"Error fetching images for product ID {product_id}: {response.content.decode()}")
        return []

def delete_image(product_id, image_id):
    """Delete a specific image for a product."""
    url = f"{API_URL}images/products/{product_id}/{image_id}"
    response = requests.delete(url, auth=HTTPBasicAuth(API_KEY, ''), verify=False)
    
    if response.status_code == 200:
        print(f"Successfully deleted image ID {image_id} for product ID {product_id}.")
    else:
        print(f"Error deleting image ID {image_id} for product ID {product_id}: {response.content.decode()}")

def remove_all_product_images(product_id):
    """Remove all images for a product."""
    image_ids = get_product_images(product_id)
    if not image_ids:
        print(f"No images found for product ID {product_id}.")
        return

    for image_id in image_ids:
        delete_image(product_id, image_id)
def get_product_id_by_code(reference):
    # URL to query products with the reference filter
    url = f"{API_URL}products?filter[reference]={reference}"

    # Make the GET request to fetch product data
    response = requests.get(url, auth=HTTPBasicAuth(API_KEY, ''), verify=False)

    if response.status_code == 200:
        # Parse XML response
        try:
            root = ET.fromstring(response.content)

            # Find all <product> elements and extract their IDs
            product_ids = [int(product.attrib['id']) for product in root.findall(".//product")]

            if product_ids:
                # Return the largest ID
                largest_id = max(product_ids)
                return largest_id
            else:
                print(f"No products found with code: {reference}")
                return None
        except Exception as e:
            print(f"Error parsing XML: {e}")
            return None
    else:
        print(f"Error fetching product data: {response.content}")
        return None


def replace_polish_characters(text):
    polish_char_map = {
        'ą': '&#261;', 'ć': '&#263;', 'ę': '&#281;', 'ł': '&#322;', 
        'ń': '&#324;', 'ó': '&#243;', 'ś': '&#347;', 'ź': '&#378;', 'ż': '&#380;',
        'Ą': '&#260;', 'Ć': '&#262;', 'Ę': '&#280;', 'Ł': '&#321;', 
        'Ń': '&#323;', 'Ó': '&#211;', 'Ś': '&#346;', 'Ź': '&#377;', 'Ż': '&#379;'
    }

    # Replace each Polish character in the string with its encoded version
    for char, encoded in polish_char_map.items():
        text = text.replace(char, encoded)
    return text

def add_xml_newlines(text):
    """
    Inserts an HTML <br /> tag before any uppercase letter directly following 
    a lowercase letter to create line breaks in PrestaShop.
    """
    result = []
    for i in range(len(text)):
        if (
            i > 0
            and text[i].isupper()
            and (text[i - 1].islower() or text[i - 1].isdigit() or text[i - 1] in ";.,:?!%")  # Uppercase after lowercase
        ):
            result.append("<br />")  # Add HTML line break
        result.append(text[i])
    return ''.join(result)

def clean_text(text):
    if isinstance(text, bytes):
        text = text.decode('utf-8')
    return text.replace('\xa0', ' ').replace('\xc2', '')

# Funkcja do tworzenia kategorii
def create_category(name,description="", parent_id=2):
    url = f"{API_URL}categories"
    headers = {"Content-Type": "application/xml; charset=UTF-8"}

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
    headers = {"Content-Type": "application/xml"}
    #name = '&#281;
    name_cdata = f"<![CDATA[{(name)}]]>"
    description_cdata = f"<![CDATA[{(description)}]]>"
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
        <id_tax_rules_group><![CDATA[4]]></id_tax_rules_group>
        <type><![CDATA[1]]></type>
        <id_shop_default><![CDATA[1]]></id_shop_default>
        <state><![CDATA[1]]></state>
        <product_type><![CDATA[combinations]]></product_type>
        <price>{price_cdata}</price>
        <unit_price>{price_cdata}</unit_price>
        <active><![CDATA[1]]></active>
        <weight>{weight_cdata}</weight>
        <reference>{code_cdata}</reference>
        <available_for_order><![CDATA[1]]></available_for_order>
        <visibility><![CDATA[both]]></visibility>
        <show_price><![CDATA[1]]></show_price>
        <link_rewrite>
            <language id="2">{link_rewrite}</language>
        </link_rewrite>
        <name>
            <language id="2">{name_cdata}</language>
            <language id="1"><![CDATA[name]]></language>
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
        return True
    else:
        print(f"Error creating product: {response.content}")
        return False

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

    if response.status_code == 200:
        try:
            tree = ET.ElementTree(ET.fromstring(response.content))
            root = tree.getroot()

            # Extract the <id> from the first <stock_available> element
            stock_id = root.find(".//stock_available/id")
            if stock_id is not None:
                return stock_id.text.strip()
            else:
                print(f"No stock ID found for product ID {product_id}")
                return None
        except ET.ParseError as e:
            print(f"Error parsing XML: {str(e)}")
            return None
    else:
        print(f"Error fetching stock for product ID {product_id}: {response.status_code} - {response.text}")
        return None




def update_stock_quantity(id,quantity=10):
    stock_id = get_stock_available_id(id)
    url = f"{API_URL}stock_availables/{stock_id}"
    headers = {"Content-Type": "application/xml"}
    
    # Prepare XML data to update the stock quantity
    data = f"""<?xml version="1.0" encoding="UTF-8"?>
<prestashop xmlns:xlink="http://www.w3.org/1999/xlink">
    <stock_available>
        <id><![CDATA[{stock_id}]]></id>
        <id_product xlink:href="http://localhost:8080/api/products/{id}"><![CDATA[{id}]]></id_product>
        <id_shop xlink:href="https://localhost:8080/api/shops/1">1</id_shop>
        <id_product_attribute><![CDATA[0]]></id_product_attribute>
        <depends_on_stock><![CDATA[0]]></depends_on_stock>
        <out_of_stock><![CDATA[2]]></out_of_stock>
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


    
def uploadPhoto(id,indeks):
    #url_image = "http://example.com/api/images/products/10/"
    url = f"{API_URL}images/products/{id}"
    key = API_KEY

    # Path to the image
    image_path1 = f"web_scraper_data/images/{indeks}_1.jpg"
    image_path2 = f"web_scraper_data/images/{indeks}_2.jpg"

    # Prepare the headers and file
    auth = (key, '')  # API key with a blank password
    files = {
    'image': ('image.jpg', open(image_path1, 'rb'), 'image/jpeg'),
    }
    # Send the POST request
    response = requests.post(url, auth=auth, files=files, verify=False)

    # Check the response
    if response.status_code == 200:
        print("Product image was successfully created.")
    else:
        print(f"Failed to upload image. HTTP Code: {response.status_code}")
        print("Response:", response.text)
    
    files = {
    'image': ('image.jpg', open(image_path2, 'rb'), 'image/jpeg'),
    }
    # Send the POST request
    response = requests.post(url, auth=auth, files=files, verify=False)

    # Check the response
    if response.status_code == 200:
        print("Product image was successfully created.")
    else:
        print(f"Failed to upload image. HTTP Code: {response.status_code}")
        print("Response:", response.text)

    

        
# Przykład użycia
if __name__ == "__main__":
    # Tworzenie kategorii
    # create_category("Kategoria zajebista", "Opis kategoriixddd")  
    # Tworzenie produktu
    #create_product("Nowy produkt", 99.99, 33)  # '3' to przykładowe ID kategorii
    #set_stock_for_all_products(quantity=10)
    # update_stock_quantity(50)
    
    # set to False if categories were already created and you only need mapping for products
    create = True
    process_categories(CATS_LIST_PATH, create)
    num_of_products = 10000
    process_products(PRODUCTS_PATH,num_of_products)

    #update_stock_quantity(43)
    #uploadPhoto(43)
    
    #print("Category-to-ID mapping:", cat_to_id)

    #for i in range(200,300):

        #remove_all_product_images(i)



    