<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;
use App\Presenters\AccountPresenter;
class Account extends Model
{
    use PresentableTrait;

    protected $presenter = AccountPresenter::class;
    protected $fillable = [

    ];
}
