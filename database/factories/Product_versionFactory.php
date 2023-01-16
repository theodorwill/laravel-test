<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product_version>
 */
class Product_versionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_id' => Product::factory(),
            'language_id' => $this->faker->numberBetween(1, 184),
            'version' => $this->faker->numberBetween(1, 3),
            'is_active' => $this->faker->boolean(50),

        ];
    }
}
