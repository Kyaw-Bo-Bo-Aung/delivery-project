<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'receiver-name','receiver-phone','qty','pick-up place','drop-off place','pick-up date','pick-up time','product-value','status','product_type_id','packaging_type_id','weight_id','client_id'
    ];
}
