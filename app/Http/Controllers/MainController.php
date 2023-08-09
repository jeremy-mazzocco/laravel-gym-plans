<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Plan;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $customers = Customer::all();

        return view('customers-show', compact('customers'));
    }

    public function show($id)
    {
        $plans = Plan::FindOrFail($id);
        // dd($plans);

        return view('plans-show', compact('plans'));
    }
}
