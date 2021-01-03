<?php

namespace App\Http\Controllers;

use App\Order;
use App\ProductType;
use App\PackagingType;
use App\Weight;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producttypes = ProductType::all();
        $packagingtypes = PackagingType::all();
        $weights = Weight::all();
        return view ('demo.index', compact("producttypes",'packagingtypes','weights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            "receiverName" => 'required',
            "receiverPhone" => 'required',
            "productType" => 'required',
            "packagingType" => 'required',
            "weight" => 'required',
            "price" => 'required',
            "pickupPlace" => 'required',
            "pickupDate" => 'required',
            "pickupTime" => 'required',
            "dropoffTime" => 'required',
        ]);
        dd($request);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
