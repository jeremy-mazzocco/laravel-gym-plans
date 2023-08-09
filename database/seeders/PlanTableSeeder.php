<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = Plan::factory()->count(50)->make();

        foreach ($plans as $plan) {
            $customer = Customer::inRandomOrder()->first();
            $plan->customer_id = $customer->id;
            $plan->save();
        }
    }
}
