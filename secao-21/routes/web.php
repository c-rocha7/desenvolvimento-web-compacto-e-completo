<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/main', [MainController::class, 'index'])->name('index');

// login route
Route::get('/login', [MainController::class, 'login'])->name('login');
Route::post('/login_submit', [MainController::class, 'login_submit'])->name('login_submit');

// main page
Route::get('/main', [MainController::class, 'main'])->name('main');
