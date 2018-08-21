<?php

namespace App\Presenters;

use App\Services\AccountService;
use Laracasts\Presenter\Presenter;
use App\Services\IncomeService;

class AccountPresenter extends Presenter
{
    /**
     * @var IncomeService $incomeService
     */
    protected $incomeService;

    /**
     * @var AccountService $accountService
     */
    protected $accountService;

    /**
     * AccountPresenter constructor.
     * @param $entity
     */
    public function __construct(
        $entity
    ){
        parent::__construct($entity);
        $this->incomeService = resolve(IncomeService::class);
        $this->accountService = resolve(AccountService::class);
    }

    public function accountName()
    {
        return ucfirst($this->name);
    }

    public function accountPercentage()
    {
        return '%' . $this->percentage;
    }

    public function availableAmount()
    {
        $incomes = $this->incomeService->findAllIncomes();
        $allIncomesAddedValue = $this->incomeService->addAllTheIncomes($incomes);

        $designedAmountByAccount = ($allIncomesAddedValue * $this->percentage) / 100;

        $accountDebts = $this->accountService->getAccountDebts($this->entity);

        $amountAvailable = $designedAmountByAccount - $accountDebts;
        return '$' . $amountAvailable;
    }
}