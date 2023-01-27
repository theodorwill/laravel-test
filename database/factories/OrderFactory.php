<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\Customer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function products()
    {
        $outputArray = [];

        for ($i = 0; $i < 5; $i++) {
            $value = $this->faker->numberBetween(1, 10);
            $outputArray[] = $value;
        }
        return $outputArray;
    }
    public function definition()
    {
        return [
            'product_id' => $this->products(),
            'customer_id' => $this->faker->numberBetween(1, 10),

            //faker mu

        ];
    }
}
