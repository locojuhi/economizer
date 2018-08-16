<?php

namespace App\Services;

use App\Repositories\TransactionRepository;

class TransactionService
{
    public $transactionRepository;

    /**
     * TransactionService constructor.
     * @param TransactionRepository $transactionRepository
     */
    public function __construct(TransactionRepository $transactionRepository)
    {
        $this->transactionRepository = $transactionRepository;
    }

    /**
     * @param int $quantity
     * @return mixed
     */
    public function getTheLastTransactions(int $quantity)
    {
        return $this->transactionRepository->getTheLastRecords($quantity);
    }
}