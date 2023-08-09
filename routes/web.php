<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;



Route::get('/', [MainController::class, 'index'])->name('customers.show');

Route::get('/plans/{id}', [MainController::class, 'show'])->name('plans.show');
