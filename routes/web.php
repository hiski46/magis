<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/', function () {
        return view('dashboard.dashboard');
    });
});
