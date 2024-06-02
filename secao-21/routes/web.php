<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/main', [MainController::class, 'index'])->name('index');
