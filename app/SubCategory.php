<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    //
    public function getProducts()
    {
      return $this->hasMany('App\Product','subcategory_id','id');
    }
}
