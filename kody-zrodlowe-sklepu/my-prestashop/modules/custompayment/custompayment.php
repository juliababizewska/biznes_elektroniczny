<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class CustomPayment extends PaymentModule
{
    public function __construct()
    {
        $this->name = 'custompayment';
        $this->tab = 'payments_gateways';
        $this->version = '1.0.0';
        $this->author = 'Your Name';
        $this->need_instance = 0;

        #$this->controllers = array("validation");

        parent::__construct();

        $this->displayName = $this->l('Custom Payment');
        $this->description = $this->l('Custom payment module for PrestaShop.');
        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

        $this->ps_versions_compliancy = array('min' => '1.7.0.0', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        return parent::install() &&
            $this->registerHook('paymentOptions') &&
            $this->registerHook('displayPaymentReturn');
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    public function hookPaymentOptions($params)
    {
        if (!$this->active) {
            return;
        }

        $payment_options = [];

        $newOption = new PrestaShop\PrestaShop\Core\Payment\PaymentOption();
        $newOption->setCallToActionText($this->l('Pay with Custom Payment'))
                  ->setAction($this->context->link->getModuleLink($this->name, 'validation', [], true))
                  ->setAdditionalInformation($this->l('Use this payment method for testing.'));

        $payment_options[] = $newOption;

        return $payment_options;
    }

    public function createOrder($cart, $id_order_state, $total, $payment_method, $customer_secure_key)
{
    $order = new Order();
    $order->id_cart = $cart->id;
    $order->id_currency = $cart->id_currency;
    $order->id_customer = $cart->id_customer;
    $order->id_address_delivery = $cart->id_address_delivery;
    $order->id_address_invoice = $cart->id_address_invoice;
    $order->payment = $payment_method;
    $order->module = $this->name;
    $order->total_paid = $total;
    $order->secure_key = $customer_secure_key;
    $order->id_shop = $this->context->shop->id;
    $order->id_lang = $this->context->language->id;
    $order->add();

    // Ustaw status zamówienia
    $order_state = new OrderState($id_order_state);
    $history = new OrderHistory();
    $history->id_order = $order->id;
    $history->changeIdOrderState($order_state->id, $order);
    $history->add();

    return $order;
}
}