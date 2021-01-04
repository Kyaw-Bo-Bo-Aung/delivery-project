<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class Weight extends Model
{
    protected $fillable = [
        'weight', 'price'
    ];

     public function orders()
  {
    return $this->hasMany('App\Order');
  }
}
