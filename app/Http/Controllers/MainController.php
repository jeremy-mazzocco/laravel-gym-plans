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
            'address' => "required|string|min:3|max:64",
        ]);
        $customer->update($data);
        return redirect()->route('customers.show');
    }



    public function plansShow($id)
    {
        $customers = Customer::FindOrFail($id);
        return view('plans-show', compact('customers'));
    }

    public function plansEdit($id)
    {
        $plan = Plan::FindOrFail($id);
        return view('plans-edit', compact('plan'));
    }

    public function plansUpdate(Request $request, $id)
    {
        $plan = Plan::FindOrFail($id);
        $data = $request->all();
        $plan->update($data);
        return redirect()->route('customers.show');
    }

    public function plansDelete($id)
    {
        $plan = Plan::findOrFail($id);
        $plan->delete();
        return redirect()->route('customers.show');
    }


    // public function accountCreate()
    // {
    //     $accounting = Accounting::all();
    //     return view('accounting-create', compact('accounting'));
    // }

    // public function accountStore(Request $request)
    // {
    //     $data = $request->all();
    //     $accounting = Accounting::create($data);
    //     return redirect()->route('accountings.show', $accounting->id);
    // }

    public function accountShow($id)
    {
        $customer = Customer::FindOrFail($id);
        $accountings = Accounting::all();
        return view('accounting-show', compact('customer', 'accountings'));
    }

    public function accountEdit($id)
    {
        $account = Accounting::FindOrFail($id);
        return view('accounting-edit', compact('account'));
    }

    public function accountUpdate(Request $request, $id)
    {
        $account = Accounting::FindOrFail($id);
        $data = $request->all();
        $account->update($data);
        return redirect()->route('customers.show');
    }
}
