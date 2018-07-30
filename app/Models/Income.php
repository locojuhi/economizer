<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Income extends Model
{
    use SoftDeletes;

    /**
     * @var array $dates
     */
    protected $dates = ['deleted_at'];

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'amount',
        'income_type_id'
    ];
}
