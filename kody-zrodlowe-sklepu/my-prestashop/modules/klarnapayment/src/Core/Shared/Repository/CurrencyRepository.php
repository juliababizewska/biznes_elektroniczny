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

namespace KlarnaPayment\Module\Core\Shared\Repository;

use KlarnaPayment\Module\Infrastructure\Repository\CollectionRepository;

if (!defined('_PS_VERSION_')) {
    exit;
}

class CurrencyRepository extends CollectionRepository implements CurrencyRepositoryInterface
{
    public function __construct()
    {
        parent::__construct(\Currency::class);
    }
}
