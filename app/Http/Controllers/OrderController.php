<?php

namespace App\Http\Controllers;

use App\Order;
use App\DeliveryMan;
use App\Transaction;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $orders=Order::all();
        $transactions = Transaction::all();
        // dd($transactions);
        return view('backend.orders.index',compact('orders','transactions'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        // dd($order);
        $deliverymen = DeliveryMan::all();
        $transaction = Transaction::where('order_id',$order->id)->first();
        // dd($transaction);
        return view('backend.orders.show',compact('order','deliverymen','transaction'));
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

         // dd($order);
         $order->status = 1;
         $order->save();
         return redirect()->route('orders.index');
         // $transaction=new Transaction;
         // $transaction->order_id=$order->id;
        


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->status =2;
        $order->save();
        return redirect()->route('orders.index');
    }

    public function detail(Request $request)
    {
        // dd ($request->id);
        $id = $request->id;
        $orderdetail = Order::where('id',$id)->get();
        return $orderdetail;
    }

    public function assign(Request $request,$id,$order)
    {
        // dd ($id,$order);
        $transaction = Transaction::where('id', $id)->first();
        $order = Order::where('id',$order)->first();
        // dd($transaction);
        $deliveryId = $request->deliveryId;
        $order->status = 2;
        $order->save();
        // dd($deliveryId);
        $transaction->delivery_man_id = $deliveryId;
        $transaction->status = 2;
        $transaction->save();

        return redirect()->route('orders.index');
        
    }


}
