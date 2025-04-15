<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Marque>
 */
class MarqueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $marques = ['Chiquita', 'Dole', 'Del Monte', 'Sunkist'];
        return [
            'marque' => fake()->unique()->randomElement($marques),
            'photo' => fake()->randomElement(['apple.jpg', 'samsung.jpg', 'nike.jpg']),
        ];
    }
}
