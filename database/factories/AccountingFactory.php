<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Accounting>
 */
class AccountingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "Month_of_the_year" => fake()->monthName(),
            "IBAN" => fake()->iban('NL'),
            "paid" => fake()->boolean(),
            "method_paid" => fake()->randomElement(['Mastercard', 'VISA', 'Cash', 'Direct Debit'])
        ];
    }
}
