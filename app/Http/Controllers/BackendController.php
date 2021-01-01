<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
     public function dashboard($value='')
   {
    return view('backend.dashboard');
   }

    public function usersdetail($value='')
   {
    return view('backend.usersdetail');
   }

   public function deliverydetail($value='')
   {
    return view('backend.deliverydetail');
   }
}
