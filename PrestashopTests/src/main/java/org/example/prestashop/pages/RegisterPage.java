package org.example.prestashop.pages;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;

public class RegisterPage extends Page {

    public RegisterPage(WebDriver driver){
        super(driver);
    }

    // ====== LOCATORS ======
    private final By genderRadio = By.id("field-id_gender-1");
    private final By nameInput = By.id("field-firstname");
    private final By surnameInput = By.id("field-lastname");
    private final By emailInput = By.id("field-email");
    private final By passwordInput = By.id("field-password");
    private final By checkBox1 = By.name("customer_privacy");
    private final By checkBox2 = By.name("psgdpr");
    private final By registerButton = By.cssSelector(".btn.btn-primary.form-control-submit");

    // ======================

    public void inputDataAndConfirm(String name, String surname, String email, String password ){
        waitAndClickElement(genderRadio);
        WebElement nameInputElement = waitForElement(nameInput);
        WebElement surnameInputElement = waitForElement(surnameInput);
        WebElement emailInputElement = waitForElement(emailInput);
        WebElement passwordInputElement = waitForElement(passwordInput);

        nameInputElement.sendKeys(name);
        surnameInputElement.sendKeys(surname);
        emailInputElement.sendKeys(email);
        passwordInputElement.sendKeys(password);

        findAndClickButton(checkBox1);
        findAndClickButton(checkBox2);

        findAndClickButton(registerButton);
    }
}
