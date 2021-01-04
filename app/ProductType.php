<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class ProductType extends Model
{
    protected $fillable = [
        'name'
    ];

     public function orders()
  {
    return $this->hasMany('App\Order');
  }
}
