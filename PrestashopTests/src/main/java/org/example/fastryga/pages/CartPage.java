package org.example.fastryga.pages;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;

import java.util.List;
import java.util.Random;

public class CartPage extends Page {

    private final Random generator = new Random();

    public CartPage(WebDriver driver){
        super(driver);
    }

    // ====== LOCATORS ======
    private final By removeButtons = By.xpath("//img[@alt='delete']");

    // ======================

    public void removeRandomProduct(){
        List<WebElement> removeButtonElements = waitForElements(removeButtons);

        int numberOfButtons = removeButtonElements.size();

        int selectedIndex = generator.nextInt(numberOfButtons);

        removeButtonElements.get(selectedIndex).click();
    }
}
