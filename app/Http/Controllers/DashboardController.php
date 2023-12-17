<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {

        $todaySale = DB::table('sales')->whereDate('created_at', today())->sum('total_price');
        $yesterday = now()->subDay();
        $yesterdaySale = DB::table('sales')->whereDate('created_at', $yesterday->toDateString())->sum('total_price');
        $thisMonthSale = DB::table('sales')->whereMonth('created_at', now()->month)->sum('total_price');
        $lastMonthSale = DB::table('sales')->whereMonth('created_at', now()->month - 1)->sum('total_price');

        return view('dashboard', compact('todaySale', 'yesterdaySale', 'thisMonthSale', 'lastMonthSale'));
    }
}
