<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Client;
use App\DeliveryMan;

class BackendController extends Controller
{
     public function dashboard($value='')
   {
    return view('backend.dashboard');
   }

    public function clientsdetail($value='')
   {
    $clients=Client::all();
    return view('backend.clientsdetail',compact('clients'));
   }

   public function deliverydetail($value='')
   {
    $deliverys=DeliveryMan::all();
    return view('backend.deliverydetail',compact('deliverys'));
   }

  
  
}
