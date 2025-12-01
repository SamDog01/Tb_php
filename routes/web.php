<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

route ::get('/', function () { return view('auth.login'); });

route ::get('/login', function () { return view('auth.login'); });

route ::get('/register', function () { return view('auth.register'); });

route ::get ('/layout', function () { return view('layout.app'); });

Route::get('/dashboard', function () { return view('dashboard.index'); });

Route::get('/ganhos', function () { return view('ganhos.index'); });

Route::get('/gastos', function () { return view('gastos.index'); });

Route::get('/categorias', function () { return view('categorias.index'); });
