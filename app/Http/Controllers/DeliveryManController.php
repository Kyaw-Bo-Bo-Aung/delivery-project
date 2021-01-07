<?php

namespace App\Http\Controllers;

use App\DeliveryMan;
use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DeliveryManController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('delivery.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('delivery.create');
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required'],
            'address' => ['required'],
        ]);
        // dd($request);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $user->assignRole('delivery_man');
        $delivery_man = new DeliveryMan;
        $delivery_man->phone = $request->phone;
        $delivery_man->address = $request->address;
        $delivery_man->user_id = $user->id;
        $delivery_man->save();
        Auth::login($user);
        
        return redirect()->route('accountpage');        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DeliveryMan  $deliveryMan
     * @return \Illuminate\Http\Response
     */
    public function show(DeliveryMan $deliveryMan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DeliveryMan  $deliveryMan
     * @return \Illuminate\Http\Response
     */
    public function edit(DeliveryMan $deliveryMan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DeliveryMan  $deliveryMan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DeliveryMan $deliveryMan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DeliveryMan  $deliveryMan
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeliveryMan $deliveryMan)
    {
        //
    }

    public function accountpage($value='')
    {   
        // dd(Auth::user()->deliveryman->id);
        $transactions = Transaction::where('delivery_man_id',Auth::user()->deliveryman->id)->orderby('created_at','desc')->get();
        // dd($transactions);
        $orders = Order::orderby('id','desc')->get();
        return view ('delivery.accountpage',compact('transactions','orders'));
    }

    public function orderdetail($value='')
    {
        return view ('delivery.orderdetail');
    }



     public function accountdetail($value='')
    {
        return view ('delivery.accountdetail');
    }

     public function confirm($id,$order)
    {

        // dd($id,$order);
        $status = Transaction::where('id',$id)->first();
        $order = Order::where('id', $order)->first();

        $status->status = 3;
        $status->save();

        $order->status = 3;
        $order->save();

        return redirect()->route('accountpage');
    }

     public function pickup($id,$order)
    {

        // dd($id,$order);
        $status = Transaction::where('id',$id)->first();
        $order = Order::where('id', $order)->first();

        $status->status = 4;
        $status->save();

        $order->status = 4;
        $order->save();

        return redirect()->route('accountpage');
    }

     public function delivered($id,$order)
    {

        // dd($id,$order);
        $status = Transaction::where('id',$id)->first();
        $order = Order::where('id', $order)->first();

        $status->status = 5;
        $status->save();

        $order->status = 5;
        $order->save();

        return redirect()->route('accountpage');
    }

    public function cancel($id,$order)
    {

        // dd($id,$order);
        $transaction = Transaction::where('id',$id)->first();
        $order = Order::where('id', $order)->first();

        $transaction->status = 1;
        $transaction->delivery_man_id = null;
        $transaction->save();

        $order->status = 1;
        $order->save();

        return redirect()->route('accountpage');
    }
}
