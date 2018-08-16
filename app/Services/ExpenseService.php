<?php

namespace App\Services;

use App\Repositories\ExpenseRepository;
use Illuminate\Database\Eloquent\Collection;

class ExpenseService
{
    /**
     * @var ExpenseRepository
     */
    public $expenseRepository;

    /**
     * ExpenseService constructor.
     * @param ExpenseRepository $expenseRepository
     */
    public function __construct(ExpenseRepository$expenseRepository)
    {
        $this->expenseRepository = $expenseRepository;
    }

    /**
     * @return mixed
     */
    public function findAllExpenses()
    {
        return $this->expenseRepository->findAll();
    }

    /**
     * @param Collection $expenses
     * @return int
     */
    public function addAllTheExpenses(Collection $expenses)
    {
        $response = 0;
        foreach ($expenses as $expense) {
            $response = $response + $expense->amount;
        }
        return $response;
    }

}