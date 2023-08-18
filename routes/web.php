<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


// HOME
Route::get('/', [MainController::class, 'index'])->name('customers.show');

// CUSTOMER
Route::get('/customer/{id}/edit', [MainController::class, 'customerEdit'])->name('customer.edit');
Route::put('/customer/{id}/update', [MainController::class, 'customerUpdate'])->name('customer.update');


Route::get('/plans/{id}', [MainController::class, 'showPlan'])->name('plans.show');

Route::get('/accounting/{id}', [MainController::class, 'showAccount'])->name('accounting.show');
