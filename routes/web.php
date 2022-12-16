<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkuDataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//API-routes
Route::get('/items', [SkuDataController::class, 'showAll']);

Route::get('/item/{id}', [SkuDataController::class, 'show']);

route::post('/sku', [SkuDataController::class, 'store']);

Route::delete('/deleteItem/{id}', [SkuDataController::class, 'destroy']);

//Front-end-routes
Route::get('/', [SkuDataController::class, 'index']);

Route::post('/saveItemRoute', [SkuDataController::class, 'saveItem'])->name('saveItem');