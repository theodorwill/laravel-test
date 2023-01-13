<?php

namespace Database\Factories;

use App\Models\SkuData;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use \NumberFormatter;

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
        $numberFormatter = new NumberFormatter('sv_SE', NumberFormatter::CURRENCY);
        $numberFormatter->setAttribute(NumberFormatter::FRACTION_DIGITS, 2);
        $priceExcVat = rand(300, 1200);
        $vat = 25;

        return [
            'vat' => $vat,
            'priceExcVat' => $priceExcVat,
            'priceIncVat' => ($priceExcVat / 100) * (100 + $vat),
            'priceExcVatFormatted' => $numberFormatter->formatCurrency($priceExcVat, 'SEK'),
            'priceIncVatFormatted' => $numberFormatter->formatCurrency(($priceExcVat / 100) * (100 + $vat), 'SEK'),
        ];
    }
}
