<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    //
    public function getCategory()
    {
      return $this->hasOne('App\Category','id','category_id');
    }
}
