package org.example.tests;

import org.example.fastryga.pages.AnyPage;
import org.example.fastryga.pages.CartPage;
import org.example.fastryga.pages.ProductsPage;
import org.example.fastryga.pages.RegisterPage;
import org.junit.jupiter.api.*;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;

@TestInstance(TestInstance.Lifecycle.PER_CLASS)
@TestMethodOrder(MethodOrderer.OrderAnnotation.class)
public class FastrygaTests {

    private WebDriver driver;

    private String login = "test";
    private String pass = "123";

    private ProductsPage productsPage;
    private AnyPage anyPage;
    private CartPage cartPage;
    private RegisterPage registerPage;

    private void info(String text){
        System.out.println(text);
    }

    @BeforeAll
    public void setUp() {
        driver = new ChromeDriver();
        driver.manage().window().maximize();

        productsPage = new ProductsPage(driver);
        anyPage = new AnyPage(driver);
        cartPage = new CartPage(driver);
        registerPage = new RegisterPage(driver);

        driver.get("https://fastryga.pl");

        anyPage.denyCookies();
        info("Cookies denied");
    }

    @Test
    @Order(1)
    public void testAddManyProducts(){
        anyPage.selectFirstCategory();
        productsPage.addToCartProductFromFirstCategory();
        info("Product added");
        productsPage.continueShopping();

        anyPage.switchToMainPage();
        anyPage.selectSecondCategory();
        productsPage.addToCartProductFromSecondCategory();
    }

    @Test
    @Order(2)
    public void testSearchFieldAndAddProduct(){

        anyPage.pasteIntoSearchFieldAndClick("sznurek");

        Assertions.assertTrue(driver.getCurrentUrl().contains("sznurek"), "Unable to get to the products page");

        productsPage.clickOnAddProductButton();
        info("Product added");
        productsPage.continueShopping();

        anyPage.pressCartButton();
        anyPage.pressOrderButton();
        info("Cart opened");
    }

    @Test
    @Order(3)
    public void testRemoveProductsFromCart(){
        for (int i = 0; i < 3; i++){
            cartPage.removeRandomProduct();
        }
    }

    @Test
    @Order(4)
    public void testRegisterNewUser(){
        anyPage.pressRegisterButton();
        registerPage.inputDataAndConfirm(login, pass);
    }

    @AfterAll
    public void tearDown() {
        if (driver != null) {
            try{
                Thread.sleep(2000);
            }catch(InterruptedException e){
                   System.out.println(e);
            } finally {
                driver.quit();
            }
        }
    }
}
