<?php

namespace App\Repositories;

use App\Models\Expense;

class ExpenseRepository extends Repository
{
    function model()
    {
        return Expense::class;
    }
}