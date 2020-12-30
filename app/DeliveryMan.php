<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryMan extends Model
{
    protected $fillable = [
        'phone', 'address', 'user_id',
    ];
}
