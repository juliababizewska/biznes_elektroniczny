package org.example.fastryga.pages;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;


public class AnyPage extends Page {
    //private final WebDriver driver;

    // ====== LOCATORS ======
    private final By mainPage = By.tagName("img");
    private final By myAccountButton = By.id("nav-button-user");
    private final By registerButton = By.linkText("Załóż konto");
    private final By cookiesDenyButton = By.id("cookies-close-deny");
    private final By searchField = By.name("query");
    private final By searchButton = By.className("btn-primary");
    private final By cartButton = By.id("nav-button-shopping-cart");
    private final By orderButton = By.linkText("Zamów");
    private final By menuButton1 = By.linkText("HOBBY");
    private final By menuButton2 = By.linkText("WŁÓCZKI");
    private final By subMenuButton1 = By.linkText("WEŁNA 100%");
    private final By subMenuButton2 = By.linkText("Love Wool");

    // ======================

    public AnyPage(WebDriver driver) {
        super(driver);
    }
    public void switchToMainPage(){
        waitAndClickElement(mainPage);
    }
    public void selectFirstCategory(){
        waitAndClickElement(menuButton1);
    }
    public void selectSecondCategory(){
        waitAndClickElement(menuButton2);
        findAndClickButton(subMenuButton1);
        findAndClickButton(subMenuButton2);
    }

    public void pasteIntoSearchFieldAndClick(String text){
        WebElement searchElement =  driver.findElement(searchField);
        searchElement.sendKeys(text);
        driver.findElement(searchButton).click();
    }

    public void pressCartButton(){
        driver.findElement(cartButton).click();
    }

    public void pressOrderButton(){
        waitAndClickElement(orderButton);
    }

    public void pressRegisterButton(){
        waitAndClickElement(myAccountButton);
        waitAndClickElement(registerButton);
    }

    public void denyCookies(){
       waitAndClickElement(cookiesDenyButton);
    }
}
