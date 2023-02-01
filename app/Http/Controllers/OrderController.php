<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Product_order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;

class OrderController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @param  \App\Models\Product_order  $product_order
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\jsonResponse
     */
    public function showAll(Order $order, Product_order $product_order, Product $product, $id)
    {
        $order = Order::where('customer_id', $id)->get()->map(function ($order) {
            $order->product_order = Product_order::where('order_id', $order->id)->get();

            //foreach product_order, get product
            foreach ($order->product_order as $product_order) {
                $product_order->product = Product::find($product_order->product_id);
            }

            return $order;
        });

        return response()->json($order); 
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @param  \App\Models\Product_order  $product_order
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\jsonResponse
     */
    public function show(Order $order, Product_order $product_order, Product $product, $id, $order_id)
    {
        $order = Order::where('customer_id', $id)->where('id', $order_id)->get()->map(function ($order) {
            $order->product_order = Product_order::where('order_id', $order->id)->get();

            //foreach product_order, get product
            foreach ($order->product_order as $product_order) {
                $product_order->product = Product::find($product_order->product_id);
            }

            return $order;
        });

        return response()->json($order);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
