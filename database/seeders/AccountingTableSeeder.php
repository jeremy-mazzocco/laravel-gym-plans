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
        $accountings = Accounting::factory()->count(80)->create();

        foreach ($accountings as $accounting) {
            $customer = Customer::inRandomOrder()->limit(rand(1, 12))->get();

            $accounting->customer()->attach($customer);
        }
    }
}
