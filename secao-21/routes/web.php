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

    // tasks - new
    Route::get('/new_task', [MainController::class, 'new_task'])->name('new_task');
    Route::post('/new_task_submit', [MainController::class, 'new_task_submit'])->name('new_task_submit');

    // tasks - edit
    Route::get('/edit_task/{id}', [MainController::class, 'edit_task'])->name('edit_task');
    Route::post('/edit_task_submit', [MainController::class, 'edit_task_submit'])->name('edit_task_submit');

    // tasks - delete
    Route::get('/delete_task/{id}', [MainController::class, 'delete_task'])->name('delete_task');
    Route::get('/delete_task_confirm', [MainController::class, 'delete_task_confirm'])->name('delete_task_confirm');

    // search
    Route::post('/search_submit', [MainController::class, 'search_submit'])->name('search_submit');

    // sort
    Route::get('/sort/{sort}', [MainController::class, 'sort'])->name('sort');
});
