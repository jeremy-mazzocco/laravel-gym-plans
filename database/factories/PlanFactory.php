<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name_of_workout" => fake()->randomElement(['SuperSet', 'Piramid', 'Strip', 'Method Bautata', 'Fast Gain']),
            "kind_of_workout" => fake()->randomElement(['Definition', 'Mass', 'Ipertrophy', 'Mass/Power', 'Power']),
            "series" => fake()->randomFloat(0, 3, 5),
            "repetitions" => fake()->randomFloat(0, 5, 12),
            "rest_time" => fake()->randomElement([40, 60, 90, 120])
        ];
    }
}
