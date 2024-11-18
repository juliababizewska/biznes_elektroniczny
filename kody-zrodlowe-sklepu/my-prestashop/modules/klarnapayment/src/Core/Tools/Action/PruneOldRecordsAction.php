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

namespace KlarnaPayment\Module\Core\Tools\Action;

use KlarnaPayment\Module\Core\Tools\DTO\PruneOldRecordsData;
use KlarnaPayment\Module\Core\Tools\Exception\CouldNotPruneOldRecords;
use KlarnaPayment\Module\Infrastructure\Logger\Repository\KlarnaPaymentLogRepositoryInterface;
use KlarnaPayment\Module\Infrastructure\Logger\Repository\PrestashopLoggerRepositoryInterface;

if (!defined('_PS_VERSION_')) {
    exit;
}

class PruneOldRecordsAction
{
    private $prestashopLoggerRepository;
    private $klarnaPaymentLogRepository;

    public function __construct(
        PrestashopLoggerRepositoryInterface $prestashopLoggerRepository,
        KlarnaPaymentLogRepositoryInterface $klarnaPaymentLogRepository
    ) {
        $this->prestashopLoggerRepository = $prestashopLoggerRepository;
        $this->klarnaPaymentLogRepository = $klarnaPaymentLogRepository;
    }

    /**
     * @throws CouldNotPruneOldRecords
     */
    public function run(PruneOldRecordsData $data)
    {
        try {
            $this->prestashopLoggerRepository->prune($data->getDaysToKeep());
            $this->klarnaPaymentLogRepository->prune($data->getDaysToKeep());
        } catch (\Throwable $exception) {
            throw CouldNotPruneOldRecords::failedToPrune($exception);
        }
    }
}
