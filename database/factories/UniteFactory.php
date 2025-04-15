<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Unite>
 */
class UniteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $unites = ['kg', 'l', 'm', 'piece', 'box'];
        return [
            'unite' => fake()->unique()->randomElement($unites),
        ];
    }
}
