<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expense extends Model
{
    use SoftDeletes;

    /**
     * @var array $dates
     */
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'amount',
        'expense_type_id'
    ];
}
