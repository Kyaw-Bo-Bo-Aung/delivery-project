<?php

namespace App;
use App\Order;
use App\App\DeliveryMan;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'status', 'delivery_man_id', 'order_id'
    ];

    public function order()
    {
        return $this->belongsTo('App\Order','order_id');
    }

     public function delivery()
    {
        return $this->belongsTo('App\DeliveryMan','delivery_man_id');
    }
}
