<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EarningsController;
use App\Http\Controllers\ExpensesController;

Route::get('/', function () {
    return view('auth.login');
});

// Login/Register
Route::get('/login', fn() => view('auth.login'))->name('login.page');
Route::get('/register', fn() => view('auth.register'))->name('register.page');

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {

    Route::get('/dashboard', fn() => view('dashboard.index'));

    Route::get('/ganhos', [EarningsController::class, 'index'])->name('earnings.index');
    Route::get('/ganhos/create', [EarningsController::class, 'create'])->name('earnings.create');
    Route::post('/ganhos', [EarningsController::class, 'store'])->name('earnings.store');
    Route::get('/ganhos/{id}/edit', [EarningsController::class, 'edit'])->name('earnings.edit');
    Route::put('/ganhos/{id}', [EarningsController::class, 'update'])->name('earnings.update');

    Route::get('/expenses', [ExpensesController::class, 'index'])->name('expenses.index');
    Route::get('/expenses/create', [ExpensesController::class, 'create'])->name('expenses.create');
    Route::post('/expenses', [ExpensesController::class, 'store'])->name('expenses.store');
    Route::get('/expenses/{id}/edit', [ExpensesController::class, 'edit'])->name('expenses.edit');
    Route::put('/expenses/{id}', [ExpensesController::class, 'update'])->name('expenses.update');
});
