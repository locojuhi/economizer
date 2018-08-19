<?php

namespace App\Services;


use App\Repositories\AccountRepository;

class AccountService
{
    public $accountRepository;

    /**
     * AccountService constructor.
     * @param $accountRepository
     */
    public function __construct(AccountRepository $accountRepository)
    {
        $this->accountRepository = $accountRepository;
    }
}