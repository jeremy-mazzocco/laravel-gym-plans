<?php

namespace Database\Seeders;

use App\Models\Accounting;
use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accountings = Accounting::factory()->count(80)->make();

        foreach ($accountings as $accounting) {
            $customer = Customer::inRandomOrder()->first();
            $accounting->customer_id = $customer->id;
            $accounting->save();
        }
    }
}
