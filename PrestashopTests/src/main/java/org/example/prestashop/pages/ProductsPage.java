package org.example.prestashop.pages;

import org.openqa.selenium.By;
import org.openqa.selenium.Keys;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.interactions.Actions;

import java.util.List;
import java.util.Random;
import java.util.concurrent.TimeUnit;

public class ProductsPage extends Page {

    private final Random generator = new Random();

    // ====== LOCATORS ======
    //private final By addToCartButton = By.id("product_list_16804");
    private final By addToCartSpecific = By.className("btn-add-to-cart");
    private final By continueButton = By.xpath("//button[contains(text(), 'Kontynuuj zakupy')]");
    private final By subCategoryButton = By.linkText("Violet");
    private final By subCategoryButton2 = By.linkText("Merynosy");
    private final By productTitleLink = By.cssSelector(".product-title>a");
    private final By quantityInput = By.id("quantity_wanted");
    private final By[] productsToOrder1 = {
            By.linkText("Violet 329"),
            By.linkText("Violet 4917"),
            By.linkText("Violet 1000"),
            By.linkText("Violet Melange 68"),
            By.linkText("Violet Melange 91"),
    };
    private final By[] productsToOrder2 = {
            By.linkText("Baby Supremo 1"),
            By.linkText("Baby Supremo 117"),
            By.linkText("Baby Supremo 12"),
            By.linkText("Baby Supremo 129"),
            By.linkText("Baby Supremo 15"),
    };

    // ======================

    public ProductsPage(WebDriver driver){
        super(driver);
    }

    public void switchToPreviousCategory(By by){
        waitAndClickElement(by);
    }

    public void clickOutside() {
        Actions action = new Actions(driver);
        action.moveByOffset(0, 0).click().build().perform();
    }

    public void continueShopping(){
        WebElement button = waitForElementToBeClickable(continueButton);
        button.click();
        //clickOutside();
    }

    public void switchToSubCategory(){
        findAndClickButton(subCategoryButton);
    }

    private void setNumberOfProduct(int n){
        WebElement input = waitForElement(quantityInput);
        input.sendKeys(Keys.BACK_SPACE);
        input.sendKeys(Keys.DELETE);
        input.sendKeys(Integer.toString(n));
    }

    public void addToCartSpecificProduct(){
        findAndClickButton(addToCartSpecific);
        continueShopping();
    }

    public void addToCartProductFromFirstCategory(){
        for (By button : productsToOrder1) {
            findAndClickButton(button);
            setNumberOfProduct(generator.nextInt(3) + 1);
            addToCartSpecificProduct();
            switchToPreviousCategory(subCategoryButton);
        }
    }

    public void addToCartProductFromSecondCategory(){
        for (By button : productsToOrder2) {
            findAndClickButton(button);
            setNumberOfProduct(generator.nextInt(3) + 1);
            addToCartSpecificProduct();
            switchToPreviousCategory(subCategoryButton2);
        }
    }

    public WebElement getRandomProductFromList(List<WebElement> products){
        int numberOfProducts = products.size();
        return products.get(generator.nextInt(numberOfProducts));
    }

    public void addRandomProductAndGoToCart(){
        List<WebElement> productList = driver.findElements(productTitleLink);
        WebElement product = getRandomProductFromList(productList);
        product.click();
        addToCartSpecificProduct();
        //waitForElementToBeClickable(addToCartSpecific);
        continueShopping();
    }

    public void additionalWait(){
        waitForElementToBeClickable(addToCartSpecific);
    }
}
