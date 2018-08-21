<?php

namespace App\Services;

use App\Repositories\ExpenseTypeRepository;

class ExpenseTypeService
{
    /**
     * @var ExpenseTypeRepository $expenseTypeRepository
     */
    public $expenseTypeRepository;

    /**
     * ExpenseTypeService constructor.
     * @param $expenseTypeRepository
     */
    public function __construct(ExpenseTypeRepository $expenseTypeRepository)
    {
        $this->expenseTypeRepository = $expenseTypeRepository;
    }
}