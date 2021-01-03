<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function main($value=''){
    	return view ('customer.main');
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
}
