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
            'detail' => $this->faker->paragraph(),
            'stock' => $this->faker->randomNumber(3, false),
            'price' => $this->faker->randomNumber(5, false),
            'discount' => $this->faker->numberBetween(1, 100)
        ];
    }
}
