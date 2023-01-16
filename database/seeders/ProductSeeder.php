<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\SkuData;
use App\Models\Product_version;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory()->count(10)
            ->has(SkuData::factory()->count(1))
            ->has(Product_version::factory()->count(3))
            ->create();
    }
}
