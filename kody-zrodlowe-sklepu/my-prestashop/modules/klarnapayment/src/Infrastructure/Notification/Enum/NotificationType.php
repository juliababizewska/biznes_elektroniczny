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

namespace KlarnaPayment\Module\Infrastructure\Notification\Enum;

if (!defined('_PS_VERSION_')) {
    exit;
}

class NotificationType
{
    const SUCCESS = 'success';
    const ERROR = 'error';
    const WARNING = 'warning';
}
