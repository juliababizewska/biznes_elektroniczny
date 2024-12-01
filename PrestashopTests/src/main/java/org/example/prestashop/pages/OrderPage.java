package org.example.prestashop.pages;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;

import java.util.List;
import java.util.NoSuchElementException;
import java.util.Random;

public class OrderPage extends Page {

    private final Random generator = new Random();

    public OrderPage(WebDriver driver){
        super(driver);
    }

    // ====== LOCATORS ======
    private final By addressInput = By.name("address1");
    private final By postcodeInput = By.name("postcode");
    private final By cityInput = By.name("city");
    private final By confirmAddressButton = By.name("confirm-addresses");
    private final By deliveryButton = By.id("delivery_option_7");
    private final By confirmDeliveryButton = By.name("confirmDeliveryOption");
    private final By paymentMethodRadioButton = By.id("payment-option-3");
    private final By agreeCheckbox = By.id("conditions_to_approve[terms-and-conditions]");
    private final By paymentConfirmButton = By.cssSelector("#payment-confirmation>div>button");
    private final By additionalPaymentMethod = By.id("payment-option-2");

    // ======================

    public void inputAddressAndConfirm(String address, String postcode, String city){
        try{
            WebElement addressInputElement = waitForElement(addressInput);
            WebElement postcodeInputElement = waitForElement(postcodeInput);
            WebElement cityInputElement = waitForElement(cityInput);

            addressInputElement.sendKeys(address);
            postcodeInputElement.sendKeys(postcode);
            cityInputElement.sendKeys(city);
        } catch(NoSuchElementException e){
            System.out.println(e.getMessage());
        } finally {
            findAndClickButton(confirmAddressButton);
        }
    }

    public void justConfirmAddress(){
        findAndClickButton(confirmAddressButton);
    }

    public void chooseCarrierAndConfirm(){
        findAndClickButton(deliveryButton);
        findAndClickButton(confirmDeliveryButton);
    }

    public void choosePaymentAndConfirm(){
        findAndClickButton(paymentMethodRadioButton);
        findAndClickButton(agreeCheckbox);
        WebElement button =  waitForElementToBeClickable(paymentConfirmButton);
        button.click();
    }

    public void chooseAdditionalPaymentMethod(){
        findAndClickButton(additionalPaymentMethod);
        findAndClickButton(agreeCheckbox);
        WebElement button =  waitForElementToBeClickable(paymentConfirmButton);
        button.click();
    }
}
