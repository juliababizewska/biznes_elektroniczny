package org.example.tests;

import org.example.prestashop.pages.*;
import org.junit.jupiter.api.*;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;

@TestInstance(TestInstance.Lifecycle.PER_CLASS)
@TestMethodOrder(MethodOrderer.OrderAnnotation.class)
public class PrestashopTests {

    private WebDriver driver;

    private final String name = "Jan";
    private final String surname = "Kowalski";
    private final String email = "test@example.com";
    private final String password = "123456";

    private final String address = "ul. Testowa 11";
    private final String postcode = "11-111";
    private final String city = "Seleniowo Małe";

    private ProductsPage productsPage;
    private AnyPage anyPage;
    private CartPage cartPage;
    private RegisterPage registerPage;
    private LoginPage loginPage;
    private OrderPage orderPage;
    private HistoryPage historyPage;

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
        loginPage = new LoginPage(driver);
        orderPage = new OrderPage(driver);
        historyPage = new HistoryPage(driver);
        CertWarningPage certWarningPage = new CertWarningPage(driver);

        driver.get("https://localhost:8080");

        String title = driver.getTitle();
        if(title.equals("Błąd dotyczący prywatności")){
            certWarningPage.acceptRisk();
        }
    }

    @Test
    @Order(1)
    public void testAddManyProducts(){
        anyPage.selectFirstCategory();
        productsPage.addToCartProductFromFirstCategory();
        info("Products added");

        anyPage.switchToMainPage();
        anyPage.selectSecondCategory();
        productsPage.addToCartProductFromSecondCategory();
        info("Products added");
    }

    @Test
    @Order(2)
    public void testSearchFieldAndAddProduct(){

        anyPage.pasteIntoSearchFieldAndClick("sznurek");

        Assertions.assertTrue(driver.getCurrentUrl().contains("sznurek"), "Unable to get to the products page");

        productsPage.addRandomProductAndGoToCart();
        info("Product added");

        anyPage.pressCartButton();
        Assertions.assertTrue(driver.getCurrentUrl().contains("koszyk"), "Unable to get to the cart");
        info("Cart opened");
    }

    @Test
    @Order(3)
    public void testRemoveProductsFromCart(){
        for (int i = 0; i < 3; i++){
            cartPage.removeRandomProduct();
            info("Product removed from cart");
        }
    }

    @Test
    @Order(4)
    public void testRegisterNewUser(){
        anyPage.pressRegisterButton();
        registerPage.inputDataAndConfirm(name, surname, email, password);
        anyPage.pressMyAccountButton();
        info("New user created");
    }

    // FOR TESTING PURPOSE ONLY
//    @Test
//    @Order(5)
//    public void testLogin(){
//        loginPage.inputDataAndConfirm(email, password);
//        anyPage.pressMyAccountButton();
//    }

    @Test
    @Order(6)
    public void testProcessCartAndBuy(){
        anyPage.pressCartButton();
        cartPage.processCart();
        orderPage.inputAddressAndConfirm(address, postcode, city);
        //orderPage.justConfirmAddress();
        orderPage.chooseCarrierAndConfirm();
        orderPage.choosePaymentAndConfirm();
        info("Products bought");
    }

    // FOR TESTING PURPOSE ONLY
    @Test
    @Order(7)
    public void testBuyAdditionalProduct(){
        anyPage.switchToMainPage();
        anyPage.pressAdditionalProductButton();
        productsPage.addToCartSpecificProduct();
        productsPage.additionalWait();
        anyPage.pressCartButton();
        cartPage.processCart();
        orderPage.justConfirmAddress();
        orderPage.chooseCarrierAndConfirm();
        orderPage.chooseAdditionalPaymentMethod();
        info("Additional products bought");
    }

    @Test
    @Order(8)
    public void testDisplayAllOrdersAndGetInvoice(){
        anyPage.switchToAllOrders();
        Assertions.assertTrue(driver.getCurrentUrl().contains("historia-zamowien"),"Unable to get to the orders page");
        info("History displayed");

        historyPage.pressInvoiceButton();
        info("Invoice downloaded");
    }

    @AfterAll
    public void tearDown() {
        if (driver != null) {
            try{
                Thread.sleep(5000);
            }catch(InterruptedException e){
                System.out.println(e);
            } finally {
                //driver.quit();
            }
        }
    }
}
