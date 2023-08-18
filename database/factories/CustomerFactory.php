<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "user_unique" => fake()->numerify('costumer-####'),
            "name" => fake()->name(),
            "lastname" => fake()->lastName(),
            "date_of_birth" => fake()->dateTimeBetween('-60 year', '-20 year'),
            "address" => fake()->address(),
            "kind_of_subscription" => fake()->randomElement(['Premium', 'Basic', 'Flex']),
            "end_subscription" => fake()->dateTimeBetween('+0 week', '+4 week'),
            "main_picture" => fake()->name(),
            "goal" => fake()->randomElement(['Lose Weight', 'Gain Mass', 'Stay Fit'])
        ];
    }
}
