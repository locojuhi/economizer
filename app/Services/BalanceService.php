<?php

namespace App\Services;

use App\Services\ExpenseService;
use App\Services\IncomeService;

class BalanceService
{
    /**
     * @var ExpenseService $expenseService
     */
    protected $expenseService;

    /**
     * @var IncomeService $incomeService
     */
    protected $incomeService;

    /**
     * BalanceService constructor.
     * @param $expenseService
     * @param $incomeService
     */
    public function __construct(
        ExpenseService $expenseService,
        IncomeService $incomeService
    ) {
        $this->expenseService = $expenseService;
        $this->incomeService = $incomeService;
    }

    /**
     * @return int
     */
    public function getTheCurrentBalance()
    {
        $incomes = $this->incomeService->addAllTheIncomes($this->incomeService->findAllIncomes());
        $expenses = $this->expenseService->addAllTheExpenses($this->expenseService->findAllExpenses());

        $result = $incomes - $expenses;
        return number_format($result,2);
    }

}