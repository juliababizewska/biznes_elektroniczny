package org.example.fastryga.pages;

import org.openqa.selenium.By;
import org.openqa.selenium.Keys;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;

import java.util.Random;

public class ProductsPage extends Page {

    private final Random generator = new Random();

    // ====== LOCATORS ======
    private final By addToCartButton = By.id("product_list_16804");
    private final By addToCartSpecific = By.cssSelector(".btn.btn-shopping-cart");
    private final By continueButton = By.cssSelector(".btn.btn-default.pull-left");
    private final By productFromFirstCategory = By.id("product_list_24053");
    private final By quantityInput = By.className("basket_add_quantity");
    private final By[] productsToOrder = {
            By.linkText("Love Wool kolor 102 popiel"),
            By.linkText("Love Wool kolor 105 jasny popiel"),
            By.linkText("Love Wool kolor 128 miodowy"),
            By.linkText("Love Wool kolor 121 granat"),
            By.linkText("Love Wool kolor 110 lodowcowy"),
            By.linkText("Love Wool kolor 129"),
            By.linkText("Love Wool kolor 115 czerwony"),
            By.linkText("Love Wool kolor 108 czarny"),
            By.linkText("Love Wool kolor 115 czerwony")
    };

    // ======================

    public ProductsPage(WebDriver driver){
        super(driver);
    }

    public void clickOnAddProductButton(){
        findAndClickButton(addToCartButton);
    }

    public void continueShopping(){
        WebElement button = waitForElement(continueButton);
        button.click();
    }

    public void addToCartProductFromFirstCategory(){
        findAndClickButton(productFromFirstCategory);
    }

    private void setNumberOfProduct(int n){
        WebElement input = waitForElement(quantityInput);
        input.sendKeys(Keys.BACK_SPACE);
        input.sendKeys(Integer.toString(n));
    }

    private void addToCartSpecificProduct(){
        driver.findElement(addToCartSpecific).click();
    }

    public void addToCartProductFromSecondCategory(){
        for (By button : productsToOrder) {
            findAndClickButton(button);
            setNumberOfProduct(generator.nextInt(5) + 2);
            addToCartSpecificProduct();
            driver.navigate().back();
        }
    }
}
