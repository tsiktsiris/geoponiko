<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function getProducts()
    {
      return $this->hasMany('App\OrderProduct','order_id','id');
    }
}
