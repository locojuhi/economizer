<?php

namespace App\Repositories;

use App\Models\Income;

class IncomeRepository extends Repository
{
    function model()
    {
        return Income::class;
    }
}