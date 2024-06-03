<?php

use App\Http\Controllers\MainController;
use App\Http\Middleware\CheckLogin;
use App\Http\Middleware\CheckLogout;
use Illuminate\Support\Facades\Route;

// out app
Route::middleware([CheckLogout::class])->group(function () {
    Route::get('/login', [MainController::class, 'login'])->name('login');
    Route::post('/login_submit', [MainController::class, 'login_submit'])->name('login_submit');
});

// in app
Route::middleware([CheckLogin::class])->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('index');
    Route::get('/logout', [MainController::class, 'logout'])->name('logout');

    // tasks
    Route::get('/new_task', [MainController::class, 'new_task'])->name('new_task');
    Route::post('/new_task_submit', [MainController::class, 'new_task_submit'])->name('new_task_submit');
});
