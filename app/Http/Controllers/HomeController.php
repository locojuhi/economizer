<?php

namespace App\Http\Controllers;

use App\Services\AccountService;
use Illuminate\Http\Request;
use App\Services\BalanceService;
use App\Services\TransactionService;

class HomeController extends Controller
{
    /**
     * @var BalanceService $balanceService
     */
    protected $balanceService;

    /**
     * @var TransactionService $transactionService
     */
    protected $transactionService;

    /**
     * @var AccountService $accountService
     */
    protected $accountService;

    /**
     * HomeController constructor.
     * @param BalanceService $balanceService
     * @param TransactionService $transactionService
     * @param AccountService $accountService
     */
    public function __construct(
        BalanceService $balanceService,
        TransactionService $transactionService,
        AccountService $accountService
    ) {
        $this->middleware('auth');
        $this->balanceService = $balanceService;
        $this->transactionService = $transactionService;
        $this->accountService = $accountService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $balance = $this->balanceService->getTheCurrentBalance();
        $lastTransactions = $this->transactionService->getTheLastTransactions(5);
        $accounts = $this->accountService->accountRepository->findAll();

        return view(
            'home',
            compact([
                'balance',
                'lastTransactions',
                'accounts'
            ])
        );
    }
}
