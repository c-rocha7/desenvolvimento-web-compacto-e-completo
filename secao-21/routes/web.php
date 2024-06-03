<?php

use App\Http\Controllers\MainController;
use App\Http\Middleware\CheckLogin;
use Illuminate\Support\Facades\Route;

// login route
Route::get('/login', [MainController::class, 'login'])->name('login');
Route::post('/login_submit', [MainController::class, 'login_submit'])->name('login_submit');

// route with middleware
Route::middleware([CheckLogin::class])->group(function () {

    Route::get('/', [MainController::class, 'index'])->name('index');
    // main page
    Route::get('/main', [MainController::class, 'main'])->name('main');
});
