<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'product_name' => fake()->sentence($nbWords = 4, $variableNbWords = true),
            'product_description' => fake()->text(),
            'product_category' => fake()->randomElement(['drinks','snacks','sweets']),
            'product_size' => fake()->randomElement(['small','medium','large']),
            'product_price' => fake()->randomDigit(),
            'product_img' => fake()->imageUrl(),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
