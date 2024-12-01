package org.example.prestashop.pages;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;

public class LoginPage extends Page {

    public LoginPage(WebDriver driver){
        super(driver);
    }

    // ====== LOCATORS ======
    private final By emailInput = By.id("field-email");
    private final By passwordInput = By.id("field-password");
    private final By loginButton = By.cssSelector(".btn.btn-primary");

    // ======================

    public void inputDataAndConfirm(String email, String password ){
        WebElement emailInputElement = waitForElement(emailInput);
        WebElement passwordInputElement = waitForElement(passwordInput);

        emailInputElement.sendKeys(email);
        passwordInputElement.sendKeys(password);

        findAndClickButton(loginButton);
    }
}
