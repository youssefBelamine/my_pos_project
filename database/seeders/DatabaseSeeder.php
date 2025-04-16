<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Famille;
use App\Models\Marque;
use App\Models\Unite;
use App\Models\Client;
use App\Models\ModeReglement;
use App\Models\Article;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Seed familles
        $familles = [
            'Fruits',
            'Vegetables',
            'Snacks',
            'Beverages',
            'Clothing',
            'Electronics',
            'Toys & Games'
        ];

        $familleRecords = [];
        foreach ($familles as $famille) {
            $familleRecords[$famille] = Famille::create([
                'famille' => $famille,
                'photo' => fake()->randomElement([
                    'fruit.jpg', 'legume.jpg', 'snack.jpg', 'boisson.jpg',
                    'vetement.jpg', 'electro.jpg', 'jouet.jpg'
                ]),
            ]);
        }

        // Seed marques for each famille
        $marqueList = [
            'Fruits' => ['Dole', 'Chiquita'],
            'Vegetables' => ['Green Giant', 'Fresh Farm'],
            'Snacks' => ['Lays', 'Doritos'],
            'Beverages' => ['Coca-Cola', 'Pepsi'],
            'Clothing' => ['Nike', 'Adidas'],
            'Electronics' => ['Samsung', 'Sony'],
            'Toys & Games' => ['Lego', 'Hasbro'],
        ];

        $marqueRecords = [];
        foreach ($marqueList as $famille => $marques) {
            foreach ($marques as $marque) {
                $marqueRecords[$famille][] = Marque::create([
                    'marque' => $marque,
                    'photo' => fake()->imageUrl(200, 200, 'brands', true),
                ]);
            }
        }

        // Seed unites
        $unites = ['kg', 'l', 'm', 'piece', 'box'];
        $uniteRecords = [];
        foreach ($unites as $unite) {
            $uniteRecords[] = Unite::create(['unite' => $unite]);
        }

        // Seed clients with new fields (adresse, telephone, email)
        foreach (range(1, 10) as $i) {
            Client::create([
                'nom' => fake()->unique()->lastName(),
                'prenom' => fake()->firstName(),
                'adresse' => fake()->address(),
                'telephone' => fake()->phoneNumber(),
                'email' => fake()->unique()->safeEmail(),
            ]);
        }

        // Seed mode_reglements with English values
        $modes = ['Cash', 'Credit Card', 'Check', 'Bank Transfer'];
        foreach ($modes as $mode) {
            ModeReglement::create(['mode_reglement' => $mode]);
        }

        // Real names of articles for each famille
        $articleNames = [
            'Fruits' => ['Apple', 'Banana', 'Orange', 'Grapes', 'Mango'],
            'Vegetables' => ['Carrot', 'Broccoli', 'Spinach', 'Lettuce', 'Potato'],
            'Snacks' => ['Chips', 'Cookies', 'Popcorn', 'Pretzels', 'Granola Bar'],
            'Beverages' => ['Coca-Cola', 'Pepsi', 'Orange Juice', 'Water', 'Lemonade'],
            'Clothing' => ['T-Shirt', 'Jeans', 'Jacket', 'Sweater', 'Shoes'],
            'Electronics' => ['Laptop', 'Smartphone', 'TV', 'Headphones', 'Smartwatch'],
            'Toys & Games' => ['Lego Set', 'Doll', 'Action Figure', 'Board Game', 'Puzzle'],
        ];

        // Seed articles with valid relationships
        foreach ($familles as $familleName) {
            $famille = $familleRecords[$familleName];
            $marques = $marqueRecords[$familleName];
            $articles = $articleNames[$familleName];

            foreach ($articles as $articleName) {
                Article::create([
                    'designation' => $articleName,
                    'prix_ht' => fake()->randomFloat(2, 5, 100),
                    'tva' => fake()->randomElement([5.5, 10, 20]),
                    'stock' => fake()->numberBetween(0, 100),
                    'photo' => strtolower(str_replace(' ', '_', $articleName)) . '.jpg', // Photo name based on article name
                    'code_barre' => fake()->unique()->ean13(),
                    'famille_id' => $famille->id,
                    'marque_id' => collect($marques)->random()->id,
                    'unite_id' => collect($uniteRecords)->random()->id,
                ]);
            }
        }
    }
}
