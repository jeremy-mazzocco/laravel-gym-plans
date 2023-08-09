<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $customers = Customer::all();

        return view('customers-show', compact('customers'));
    }
}
