<?php

class Przelewy24ValidationModuleFrontController extends ModuleFrontController
{
    public function postProcess()
    {
        $this->module = PaymentModule::getInstanceByName('przelewy24');
        if (!$this->module) {
            die('Błąd inicjalizacji modułu.');
        }

        // Logika płatności...
        $cart = $this->context->cart;
        $customer = new Customer($cart->id_customer);
        $total = $cart->getOrderTotal(true, Cart::BOTH);

        $this->module->validateOrder(
            $cart->id,
            Configuration::get('PS_OS_PREPARATION'),
            $total,
            $this->module->displayName,
            null,
            [],
            (int)$cart->id_currency,
            false,
            $customer->secure_key
        );

        Tools::redirect('index.php?controller=order-confirmation&id_cart=' . $cart->id . '&id_module=' . $this->module->id . '&id_order=' . $this->module->currentOrder . '&key=' . $customer->secure_key);
    }
}