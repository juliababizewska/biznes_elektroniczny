<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */

namespace PrestaShop\Module\PrestashopCheckout\Checkout\Command;

use PrestaShop\Module\PrestashopCheckout\Cart\Exception\CartException;
use PrestaShop\Module\PrestashopCheckout\Cart\ValueObject\CartId;
use PrestaShop\Module\PrestashopCheckout\PayPal\Order\Exception\PayPalOrderException;
use PrestaShop\Module\PrestashopCheckout\PayPal\Order\ValueObject\PayPalOrderId;

class SaveCheckoutCommand
{
    /**
     * @var CartId
     */
    private $cartId;

    /**
     * @var PayPalOrderId
     */
    private $orderPayPalId;

    /**
     * @var string
     */
    private $orderPayPalStatus;

    /**
     * @var string
     */
    private $intent;

    /**
     * @var string
     */
    private $fundingSource;

    /**
     * @var bool
     */
    private $isExpressCheckout;

    /**
     * @var bool
     */
    private $isHostedFields;

    /**
     * @var string
     */
    private $environment;

    /**
     * @param int $cartId
     * @param string $orderPayPalId
     * @param string $orderPayPalStatus
     * @param string $intent
     * @param string $fundingSource
     * @param bool $isExpressCheckout
     * @param bool $isHostedFields
     * @param string $environment
     *
     * @throws CartException
     * @throws PayPalOrderException
     */
    public function __construct($cartId, $orderPayPalId, $orderPayPalStatus, $intent, $fundingSource, $isExpressCheckout, $isHostedFields, $environment)
    {
        $this->cartId = new CartId($cartId);
        $this->orderPayPalId = new PayPalOrderId($orderPayPalId);
        $this->orderPayPalStatus = $orderPayPalStatus;
        $this->intent = $intent;
        $this->fundingSource = $fundingSource;
        $this->isExpressCheckout = $isExpressCheckout;
        $this->isHostedFields = $isHostedFields;
        $this->environment = $environment;
    }

    /**
     * @return CartId
     */
    public function getCartId()
    {
        return $this->cartId;
    }

    /**
     * @return PayPalOrderId
     */
    public function getOrderPayPalId()
    {
        return $this->orderPayPalId;
    }

    /**
     * @return string
     */
    public function getFundingSource()
    {
        return $this->fundingSource;
    }

    /**
     * @return bool
     */
    public function isExpressCheckout()
    {
        return $this->isExpressCheckout;
    }

    /**
     * @return bool
     */
    public function isHostedFields()
    {
        return $this->isHostedFields;
    }

    /**
     * @return string
     */
    public function getOrderPayPalStatus()
    {
        return $this->orderPayPalStatus;
    }

    /**
     * @return string
     */
    public function getIntent()
    {
        return $this->intent;
    }

    /**
     * @return string
     */
    public function getEnvironment()
    {
        return $this->environment;
    }
}
