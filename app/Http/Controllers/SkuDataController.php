<?php

namespace App\Http\Controllers;

use App\Models\SkuData;
use App\Http\Requests\StoreSkuDataRequest;
use App\Http\Requests\UpdateSkuDataRequest;

class SkuDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('welcome', ['allSkuData' => SkuData::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSkuDataRequest  $request
     * @return \Illuminate\View\View
     */
    public function saveItem(StoreSkuDataRequest $request){

        $newSkuData = new SkuData;
        $newSkuData->name = $request->skuData;
        $newSkuData->save();

        return view('welcome', ['allSkuData' => SkuData::all()]);
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
     * @param  \App\Http\Requests\StoreSkuDataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSkuDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SkuData  $skuData
     * @return \Illuminate\Http\Response
     */
    public function show(SkuData $skuData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SkuData  $skuData
     * @return \Illuminate\Http\Response
     */
    public function edit(SkuData $skuData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSkuDataRequest  $request
     * @param  \App\Models\SkuData  $skuData
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSkuDataRequest $request, SkuData $skuData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SkuData  $skuData
     * @return \Illuminate\Http\Response
     */
    public function destroy(SkuData $skuData)
    {
        //
    }
}
