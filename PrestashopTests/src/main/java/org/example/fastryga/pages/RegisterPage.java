package org.example.fastryga.pages;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;

public class RegisterPage extends Page{

    public RegisterPage(WebDriver driver){
        super(driver);
    }

    // ====== LOCATORS ======
    private final By loginInput = By.id("st_form-user-email");
    private final By passwordInput = By.id("st_form-user-password1");
    private final By repeatPasswordInput = By.id("st_form-user-password2");
    private final By checkBox = By.id("st_form-user-privacy");
    private final By registerButton = By.linkText("Załóż konto");

    // ======================

    public void inputDataAndConfirm(String login, String pass){
        WebElement loginInputElement = waitForElement(loginInput);
        WebElement passwordInputElement = waitForElement(passwordInput);
        WebElement repeatPasswordInputElement = waitForElement(repeatPasswordInput);
        WebElement checkBoxElement = waitForElement(checkBox);

        loginInputElement.sendKeys(login);
        passwordInputElement.sendKeys(pass);
        repeatPasswordInputElement.sendKeys(pass);

        checkBoxElement.click();

        findAndClickButton(registerButton);
    }
}
