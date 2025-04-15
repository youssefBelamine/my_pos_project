<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Famille>
 */
class FamilleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $familles = [
            'Fruits', 
            'Vegetables', 
            'Snacks', 
            'Beverages',
            'Clothing',
            'Electronics', 
            'Toys & Games'
        ];
        // Shuffle the familles array to ensure no repetition and each family gets a unique photo
        shuffle($familles); // Shuffle the families to ensure randomness

        return [
            'famille' => array_pop($familles), // Pop the last element to ensure uniqueness
            'photo' => fake()->randomElement(['fruit.jpg', 'legume.jpg', 'electro.jpg', 'vetement.jpg', 'meuble.jpg']),
        ];
    }
}
