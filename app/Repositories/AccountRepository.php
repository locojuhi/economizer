<?php

namespace App\Repositories;

use App\Models\Account;

class AccountRepository extends Repository
{
    function model()
    {
        return Account::class;
    }
}