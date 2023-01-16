<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Language;
use App\Models\Product;
use App\Models\Product_version;
use App\Models\SkuData;
use Illuminate\Http\Response;

class ProductController extends Controller
{

    public function show(Product $product, SkuData $skuData, $id): \Illuminate\Http\JsonResponse
    {
        $product = Product::find($id);
        $skuData = SkuData::where('product_id', $id)->get();
        $product->sku = $skuData;

        return response()->json($product);
    }

    public function showProductVersion(Product_version $productVersion, $id): \Illuminate\Http\JsonResponse
    {
        $productVersion = Product_version::where('product_id', $id)->get();
        return response()->json(['product_versions' => $productVersion]);
    }

    public function showLanguage(Language $language, Product_version $product_version, $id): \Illuminate\Http\JsonResponse
    {
        $language = Language::join('product_versions', 'languages.id', '=', 'product_versions.language_id')
            ->where('product_versions.product_id', $id)
            ->where('product_versions.is_active', 1)
            ->get(['languages.*']);

        return response()->json(['languages' => $language]);
    }

    public function showAllInfo(Product $product, SkuData $skuData, Language $language, Product_version $product_version, $id): \Illuminate\Http\JsonResponse
    {
        $product = Product::find($id);
        $skuData = SkuData::where('product_id', $id)->get();
        $product->sku = $skuData;
        //active product version
        $product_version = Product_version::where('product_id', $id)->get();

        $language = Language::join('product_versions', 'languages.id', '=', 'product_versions.language_id')
            ->where('product_versions.product_id', $id)
            ->where('product_versions.is_active', 1)
            ->get(['languages.id', 'languages.name', 'languages.code']);

        return response()->json([
            'product' => $product,
            'product_versions' => $product_version,
            'languages' => $language,
        ]);
    }


}
