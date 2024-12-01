package org.example.prestashop.pages;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;

import java.util.List;
import java.util.NoSuchElementException;
import java.util.Random;

public class HistoryPage extends Page {

    private final Random generator = new Random();

    public HistoryPage(WebDriver driver){
        super(driver);
    }

    // ====== LOCATORS ======
    private final By invoiceButton = By.cssSelector(".text-sm-center.hidden-md-down>a");

    // ======================

    public void pressInvoiceButton(){
        findAndClickButton(invoiceButton);
    }

}
