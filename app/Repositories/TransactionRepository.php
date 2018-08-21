<?php

namespace App\Repositories;

use App\Models\Transaction;

class TransactionRepository extends Repository
{
    function model()
    {
        return Transaction::class;
    }

    public function getTheLastRecords(int $quantity)
    {
        return $this->model()::with(['user', 'income', 'expense'])
            ->orderBy('id', 'desc')
            ->limit($quantity)
            ->get();
    }
}