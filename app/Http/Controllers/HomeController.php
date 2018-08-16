<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BalanceService;

class HomeController extends Controller
{
    /**
     * @var BalanceService $balanceService
     */
    protected $balanceService;

    /**
     * HomeController constructor.
     * @param BalanceService $balanceService
     */
    public function __construct(BalanceService $balanceService) {
        $this->middleware('auth');
        $this->balanceService = $balanceService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $balance = $this->balanceService->getTheCurrentBalance();
        return view('home', compact('balance'));
    }
}
