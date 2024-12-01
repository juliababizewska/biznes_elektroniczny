package org.example.prestashop.pages;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.interactions.Actions;
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;

import java.time.Duration;
import java.util.List;

public abstract class Page {

    protected WebDriver driver;

    public Page(WebDriver driver){
        this.driver = driver;
    }

    protected List<WebElement> waitForElements(By by){
        WebDriverWait wait = new WebDriverWait(driver, Duration.ofSeconds(5));
        wait.until(ExpectedConditions.presenceOfElementLocated(by));
        return driver.findElements(by);
    }

    protected WebElement waitForElement(By by){
        WebDriverWait wait = new WebDriverWait(driver, Duration.ofSeconds(5));
        return wait.until(ExpectedConditions.presenceOfElementLocated(by));
    }

    protected WebElement waitForElementToBeClickable(By by){
        WebDriverWait wait = new WebDriverWait(driver, Duration.ofSeconds(5));
        return wait.until(ExpectedConditions.elementToBeClickable(by));
    }

    protected void scrollPageToElement(WebElement element){
        new Actions(driver)
                .scrollToElement(element)
                .perform();
    }

    protected void findAndClickButton(By by){
        WebElement button = waitForElement(by);
        scrollPageToElement(button);
        button.click();
    }

    protected void waitAndClickElement(By by){
        waitForElement(by).click();
    }
}
