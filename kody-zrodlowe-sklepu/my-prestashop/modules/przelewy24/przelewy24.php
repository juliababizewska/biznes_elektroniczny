<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class Przelewy24 extends PaymentModule
{
    public function __construct()
    {
        $this->name = 'przelewy24';
        $this->tab = 'payments_gateways';
        $this->version = '1.0.0';
        $this->author = 'Wojciech Derwisz';
        $this->need_instance = 0;

        #$this->controllers = array("validation");

        parent::__construct();

        $this->displayName = $this->l('Przelewy24');
        $this->description = $this->l('Payment module imitating Przelewy24');
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
        $newOption->setCallToActionText($this->l('Przelewy24'))
                  ->setAction($this->context->link->getModuleLink($this->name, 'validation', [], true))
                  ->setAdditionalInformation($this->l('Przelewy24 - łatwa metoda płatności'));

        $payment_options[] = $newOption;

        return $payment_options;
    }
}