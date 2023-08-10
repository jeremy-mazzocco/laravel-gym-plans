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

    public function showPlan($id)
    {
        $customers = Customer::FindOrFail($id);

        return view('plans-show', compact('customers'));
    }

    public function showAccount($id)
    {
        $customers = Customer::FindOrFail($id);

        return view('accounting-show', compact('customers'));
    }
}
