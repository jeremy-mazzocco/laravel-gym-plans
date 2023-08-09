<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bill>
 */
class BillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            "subscription_cost" => fake()->randomElement([19.90, 29.90]),
            "shop_purchase" => fake()->randomFloat(2, 0, 30),
            "discount" => fake()->randomElement([10, 15, 20])
        ];
    }
}
