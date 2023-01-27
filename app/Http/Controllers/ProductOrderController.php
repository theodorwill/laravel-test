<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProduct_orderRequest;
use App\Http\Requests\UpdateProduct_orderRequest;
use App\Models\Product_order;

class ProductOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProduct_orderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduct_orderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product_order  $product_order
     * @return \Illuminate\Http\Response
     */
    public function show(Product_order $product_order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product_order  $product_order
     * @return \Illuminate\Http\Response
     */
    public function edit(Product_order $product_order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProduct_orderRequest  $request
     * @param  \App\Models\Product_order  $product_order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProduct_orderRequest $request, Product_order $product_order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product_order  $product_order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product_order $product_order)
    {
        //
    }
}
