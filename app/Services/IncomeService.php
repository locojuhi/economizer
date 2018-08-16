<?php

namespace App\Services;

use App\Repositories\IncomeRepository;
use Illuminate\Database\Eloquent\Collection;

class IncomeService
{
    /**
     * @var IncomeRepository $incomeRepository
     */
    public $incomeRepository;

    /**
     * IncomeService constructor.
     * @param IncomeRepository $incomeRepository
     */
    public function __construct(IncomeRepository $incomeRepository)
    {
        $this->incomeRepository = $incomeRepository;
    }

    /**
     * @return mixed
     */
    public function findAllIncomes()
    {
        return $this->incomeRepository->findAll();
    }

    /**
     * @param Collection $incomes
     * @return int
     */
    public function addAllTheIncomes(Collection $incomes)
    {
        $response = 0;
        foreach ($incomes as $income) {
            $response = $response + $income->amount;
        }
        return $response;
    }
}