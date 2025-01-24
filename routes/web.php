<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Backend\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [authController::class, 'login'])->name('auth.create');
Route::post('/login', [AuthController::class, 'loginAuth'])->name('auth.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('/forgot', [AuthController::class, 'forgot'])->name('auth.forgot');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.home');