<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'receiver_name','receiver_phone','qty','pick_up_place','drop_off_place','pick_up_date','pick_up_time','delivery_fees','status','product_type_id','packaging_type_id','weight_id','client_id'
    ];
}
