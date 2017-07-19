<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubCategory;
use App\Product;

class Category extends Model
{
    //
    public function getSubCategories()
    {
      return $this->hasMany('App\SubCategory','category_id','id');
    }

    public function getProducts()
    {
      return $this->hasMany('App\Product','category_id','id');
    }
}
