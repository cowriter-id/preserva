<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DstnController;

Route::get('/', [DstnController::class, 'index']);

Route::get('/login', [DstnController::class, 'login'])->name('login');
// Route::post('/login-proses', [DstnController::class, 'login_proses'])->name('login-proses');
// Route::get('/logout', [DstnController::class, 'logout'])->name('logout');
