<?php

namespace App\Repositories;

use App\Models\ExpenseType;

class ExpenseTypeRepository extends Repository
{
    function model()
    {
        return ExpenseType::class;
    }
}