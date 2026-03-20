<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => fake()->words(3, true),
            'sku' => fake()->unique()->bothify('PROD-????-###'),
            'price' => fake()->randomFloat(2, 5, 1000),
            'stock' => fake()->numberBetween(0, 500),
            'category' => fake()->randomElement(['Electronics', 'Books', 'Home', 'Toys', 'Clothing', 'Sport']),
            'description' => fake()->sentence(15),
        ];
    }
}
