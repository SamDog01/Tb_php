<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function financas(Request $request)
{
    $userId = auth()->id();

    $month = $request->input('month', now()->month);
    $year  = $request->input('year', now()->year);

    $earnings = Earnings::where('user_id', $userId)
        ->whereMonth('date', $month)
        ->whereYear('date', $year)
        ->sum('amount');

    $expenses = Expenses::where('user_id', $userId)
        ->whereMonth('date', $month)
        ->whereYear('date', $year)
        ->sum('amount');

    $balance = $earnings - $expenses;

    return view('dashboard.finance', compact('earnings', 'expenses', 'balance', 'month', 'year'));
}

}
