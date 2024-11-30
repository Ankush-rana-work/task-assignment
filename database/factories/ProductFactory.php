<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 10, 100), // Price between 10 and 100
            'rating' => $this->faker->randomFloat(1, 1, 5),  // Rating between 1 and 5
            'image' => $this->faker->imageUrl(640, 480, 'products', true), // Fake image URL
        ];
    }
}
