<?php

namespace Database\Factories;

use App\Models\SkuData;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SkuData>
 */
class SkuDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sku' => $this->faker->unique()->numberBetween(100000, 999999),
            'vat' => 25,
        ];
    }
}
