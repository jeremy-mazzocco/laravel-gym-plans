<?php

namespace App\Http\Controllers;

use App\Models\Accounting;
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

    public function customerEdit($id)
    {
        $customer = Customer::FindOrFail($id);

        return view('customer-edit', compact('customer'));
    }

    public function customerUpdate(Request $request, $id)
    {
        $customer = Customer::FindOrFail($id);
        $data = $request->validate([
            'name' => "required|string|min:3|max:64",
            'lastname' => "required|string|min:3|max:64",
            'date_of_birth' => "required|date",
            'address' => "required|string|min:3|max:64",
            'kind_of_subscription' => "required|string|min:3|max:64",
            'end_subscription' => "required|date",
            'goal' => "nullable|string"
        ]);

        $customer = customerUpdate($data);
        $customer->plans()->sync($data['plans']);
        return redirect()->route('customers.show');
    }

    public function showPlan($id)
    {
        $customers = Customer::FindOrFail($id);

        return view('plans-show', compact('customers'));
    }

    public function showAccount($id)
    {
        $customers = Customer::FindOrFail($id);
        $accounting = Accounting::all();

        return view('accounting-show', compact('customers', 'accounting'));
    }
}
