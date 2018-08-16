<?php

namespace App\Http\Controllers;

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
     * HomeController constructor.
     * @param BalanceService $balanceService
     */
    public function __construct(
        BalanceService $balanceService,
        TransactionService $transactionService
    ) {
        $this->middleware('auth');
        $this->balanceService = $balanceService;
        $this->transactionService = $transactionService;
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

        return view('home', compact(['balance', 'lastTransactions']));
    }
}
