<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Expense;

class ExpenseType extends Model
{
    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }
}
