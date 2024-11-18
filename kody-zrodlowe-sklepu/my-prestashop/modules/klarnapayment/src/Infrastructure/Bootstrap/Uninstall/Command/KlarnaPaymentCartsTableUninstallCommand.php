<?php
/**
 * NOTICE OF LICENSE
 *
 * @author    Klarna Bank AB www.klarna.com
 * @copyright Copyright (c) permanent, Klarna Bank AB
 * @license   ISC
 *
 * @see       /LICENSE
 *
 * International Registered Trademark & Property of Klarna Bank AB
 */

namespace KlarnaPayment\Module\Infrastructure\Bootstrap\Uninstall\Command;

if (!defined('_PS_VERSION_')) {
    exit;
}

class KlarnaPaymentCartsTableUninstallCommand implements UninstallCommandInterface
{
    public function getName(): string
    {
        return \KlarnaPaymentCart::$definition['table'];
    }

    public function getCommand(): string
    {
        return 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . pSQL(\KlarnaPaymentCart::$definition['table']) . '`;';
    }
}
