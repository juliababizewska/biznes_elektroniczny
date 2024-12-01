package org.example.prestashop.pages;

import org.openqa.selenium.By;
import org.openqa.selenium.Keys;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;


public class AnyPage extends Page {
    //private final WebDriver driver;

    // ====== LOCATORS ======
    private final By mainPage = By.tagName("img");
    private final By myAccountButton = By.cssSelector("#account-item>a");
    private final By registerButton = By.linkText("Nie masz konta? Załóż je tutaj");
    private final By cookiesDenyButton = By.id("cookies-close-deny");
    private final By searchField = By.name("s");
    private final By searchButton = By.className("btn-primary");
    private final By cartButton = By.cssSelector("#cart-item");
    private final By productButton1 = By.linkText("Anchor Metallic  302");
    private final By menuButton1 = By.linkText("KORDONKI MULINA");
    private final By menuButton2 = By.linkText("WŁÓCZKI");
    private final By subMenuButton1 = By.linkText("Violet");
    private final By subMenuButton2 = By.linkText("Merynosy");
    private final By orderHistoryButton = By.cssSelector("#history-link");
    private final By additionalProductButton = By.linkText("Bio Balance 29");

    // ======================

    public AnyPage(WebDriver driver) {
        super(driver);
    }
    public void switchToMainPage(){
        waitAndClickElement(mainPage);
    }

    public void selectFirstCategory(){
        waitAndClickElement(menuButton1);
        findAndClickButton(subMenuButton1);
    }
    public void selectSecondCategory(){
        waitAndClickElement(menuButton2);
        //findAndClickButton(subMenuButton1);
        findAndClickButton(subMenuButton2);
    }

    public void pasteIntoSearchFieldAndClick(String text){
        WebElement searchElement =  driver.findElement(searchField);
        searchElement.sendKeys(text);
       // driver.findElement(searchButton).click();
        searchElement.sendKeys(Keys.ENTER);
    }

    public void pressCartButton(){
        waitAndClickElement(cartButton);
    }

    public void pressOrderButton(){
        waitAndClickElement(productButton1);
    }

    public void pressMyAccountButton(){
        waitAndClickElement(myAccountButton);
    }

    public void pressRegisterButton(){
        pressMyAccountButton();
        waitAndClickElement(registerButton);
    }

    public void switchToAllOrders(){
        pressMyAccountButton();
        waitAndClickElement(orderHistoryButton);
    }

    public void pressAdditionalProductButton(){
        findAndClickButton(additionalProductButton);
    }
}
