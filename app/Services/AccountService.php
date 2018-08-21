<?php

namespace App\Services;


use App\Models\Account;
use App\Repositories\AccountRepository;

class AccountService
{
    /**
     * @var AccountRepository $accountRepository
     */
    public $accountRepository;

    /**
     * @var ExpenseTypeService $expenseTypeService
     */
    protected $expenseTypeService;

    /**
     * AccountService constructor.
     * @param AccountRepository $accountRepository
     * @param ExpenseTypeService $expenseTypeService
     */
    public function __construct(
        AccountRepository $accountRepository,
        ExpenseTypeService $expenseTypeService
    ){
        $this->accountRepository = $accountRepository;
        $this->expenseTypeService = $expenseTypeService;
    }

    /**
     * @param Account $account
     * @return int
     */
    public function getAccountDebts(Account $account)
    {
        $expenseTypeRepository = $this->expenseTypeService->expenseTypeRepository;
        $expenseTypes = $expenseTypeRepository->findByName(json_decode($account->debt_from))->get();
        $expenseResult = 0;

        foreach ($expenseTypes as $expenseType) {
            foreach ($expenseType->expenses as $expense) {
                $expenseResult += $expense->amount;
            }
        }
        return $expenseResult;
    }
}