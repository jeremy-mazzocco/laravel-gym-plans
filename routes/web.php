<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


// HOME
Route::get('/', [MainController::class, 'index'])->name('customers.show');


// CUSTOMER
Route::get('/customer/{id}/edit', [MainController::class, 'customerEdit'])->name('customer.edit');
Route::put('/customer/{id}/update', [MainController::class, 'customerUpdate'])->name('customer.update');


// PLANS
Route::get('/plans/{id}', [MainController::class, 'plansShow'])->name('plans.show');
Route::get('/plans/{id}/edit', [MainController::class, 'plansEdit'])->name('plans.edit');
Route::put('/plans/{id}/update', [MainController::class, 'plansUpdate'])->name('plans.update');
Route::delete('/plans/{id}/delete', [MainController::class, 'plansDelete'])
    ->name('plans.delete');


// ACCOUNTING
Route::get('/accounting/{id}', [MainController::class, 'accountShow'])->name('accountings.show');
Route::get('/accounting/{id}/edit', [MainController::class, 'accountEdit'])->name('accounting.edit');
Route::put('/accounting/{id}/update', [MainController::class, 'accountUpdate'])->name('accounting.update');
