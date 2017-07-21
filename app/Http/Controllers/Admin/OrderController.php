<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Order;
use App\OrderDetail;

class OrderController extends Controller
{


    public function index_unconfirmed()
    {
      $items = Order::paginate(15);
      return view('backend.orders.unconfirmed.index')->with('items',$items);
    }




}
