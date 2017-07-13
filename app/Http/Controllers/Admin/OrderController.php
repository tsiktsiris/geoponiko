<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Order;
use App\OrderDetail;

class OrderController extends Controller
{


    public function index()
    {
      $items = Order::paginate(15);
      return view('backend.category.index')->with('items',$items);
    }

}
