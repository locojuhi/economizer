<?php

namespace App\Repositories;

use App\Models\ExpenseType;

class ExpenseTypeRepository extends Repository
{
    function model()
    {
        return ExpenseType::class;
    }

    /**
     * @param array $names
     * @return mixed
     */
    public function findByName(array $names)
    {
        return $this->model::whereIn('name', $names);
    }
}