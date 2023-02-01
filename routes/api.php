<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkuDataController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/items', [SkuDataController::class, 'showAll']);

Route::get('/item/{id}', [SkuDataController::class, 'show']);

Route::post('/sku', [SkuDataController::class, 'getPrice']);

Route::delete('/deleteItem/{id}', [SkuDataController::class, 'destroy']);



Route::get('/product/{id}', [ProductController::class, 'show']);

Route::get('/product/{id}/ver', [ProductController::class, 'showProductVersion']);

Route::get('/product/{id}/lang', [ProductController::class, 'showLanguage']);

Route::get('/product/{id}/all', [ProductController::class, 'showAllInfo']);


Route::get('/customer/{id}', [CustomerController::class, 'show']);

Route::get('/customer/{id}/orders', [OrderController::class, 'show']);