<?php

namespace App\Repositories;

use App\Models\IncomeType;

class IncomeTypeRepository extends Repository
{
    function model()
    {
        return IncomeType::class;
    }
}