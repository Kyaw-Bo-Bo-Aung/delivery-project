<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Weight;
use App\ProductType;

class Order extends Model
{
    protected $fillable = [
        'receiver_name','receiver_phone','qty','pick_up_place','drop_off_place','pick_up_date','pick_up_time','delivery_fees','status','product_type_id','packaging_type_id','weight_id','client_id'
    ];

      public function weight($value='')
    {
    	return $this->belongsTo('App\Weight');
    }

     public function product_type($value='')
    {
    	return $this->belongsTo('App\ProductType');
    }

    public function packaging_type($value='')
    {
    	return $this->belongsTo('App\PackagingType');
    }
}
