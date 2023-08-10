<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;



Route::get('/', [MainController::class, 'index'])->name('customers.show');

Route::get('/plans/{id}', [MainController::class, 'showPlan'])->name('plans.show');

Route::get('/accounting/{id}', [MainController::class, 'showAccount'])->name('accounting.show');
