<?php

namespace App\Http\Controllers;

use App\Order;
use App\ProductType;
use App\PackagingType;
use App\Weight;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function main($value=''){
        $producttypes = ProductType::all();
        $packagingtypes = PackagingType::all();
        $weights = Weight::all();


    	return view ('customer.main',compact("producttypes","packagingtypes", "weights"));
    }
    public function about($value=''){
    	return view ('customer.about');
    }
    public function orderinformation($value=''){
    	return view ('customer.orderinformation');
    }
    public function orderdetailhistory($value=''){
    	return view ('customer.orderdetailhistory');
    }
     public function customerlogin($value=''){
    	return view ('customer.customerlogin');
    }
     public function customerregister($value=''){
    	return view ('customer.customerregister');
    }
    public function weight(Request $request){
       $wid = request('id');
       // dd ($wid);
       $price = Weight::where("id", $wid)->get();
       return $price;
    }

    public function store(Request $request){
        // dd ($request);
        $client_id = auth()->user()->id;
        // dd($user_id);
        $request->validate([
            'receiverName' => 'required',
            'receiverPhone' => 'required',
            'product_select' => 'required',
            'package_select' => 'required',
            'qty' => 'required',
            'pickUpLocation' => 'required',
            'dropOffLocation' => 'required',
            'pickupDate' => 'required',
            'pickupTime' => 'required',
            // 'deliveryFees' => 'required',
            'select_weight' => 'required',
        ]);
        // dd($request);
        $order = new Order;
        $order->receiver_name = $request->receiverName;
        $order->receiver_phone   = $request->receiverPhone;
        $order->product_type_id = $request->product_select;
        $order->packaging_type_id = $request->package_select;
        $order->qty = $request->qty;
        $order->pick_up_place = $request->pickUpLocation;
        $order->drop_off_place = $request->dropOffLocation;
        $order->pick_up_date = $request->pickupDate;
        $order->pick_up_time = $request->pickupTime;
        $order->product_value = $request->deliveryFees;
        $order->weight_id = $request->select_weight;
        $order->client_id = $client_id;
        $order->note = $request->note;
        $order->save();

        return redirect()->route('orderinformationpage');
    }


}
