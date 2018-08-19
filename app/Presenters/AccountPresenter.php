<?php

namespace App\Presenters;

use Laracasts\Presenter\Presenter;
use App\Services\IncomeService;

class AccountPresenter extends Presenter
{
    protected $incomeService;

    public function __construct(
        $entity
    ){
        parent::__construct($entity);
        $this->incomeService = resolve(IncomeService::class);
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

        $amountAvailable = ($allIncomesAddedValue * $this->percentage) / 100;
        return '$' . $amountAvailable;
    }
}