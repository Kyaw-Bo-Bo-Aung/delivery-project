<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\User;

class DeliveryMan extends Model
{
    protected $fillable = [
        'phone', 'address', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
