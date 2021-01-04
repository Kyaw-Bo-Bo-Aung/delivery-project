<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'status_id', 'delivery_man_id', 'order_id'
    ];
}
