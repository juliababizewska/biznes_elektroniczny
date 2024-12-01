package org.example.prestashop.pages;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;


public class CertWarningPage extends Page {
    //private final WebDriver driver;

    // ====== LOCATORS ======
    private final By advancedButton = By.id("details-button");
    private final By proceedLink = By.id("proceed-link");

    // ======================

    public CertWarningPage(WebDriver driver) {
        super(driver);
    }

    public void acceptRisk(){
        waitAndClickElement(advancedButton);
        waitAndClickElement(proceedLink);
    }


}
