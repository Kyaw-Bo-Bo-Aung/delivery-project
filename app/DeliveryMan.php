<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class DeliveryMan extends Model
{
    protected $fillable = [
        'phone', 'address', 'user_id',
    ];
}
