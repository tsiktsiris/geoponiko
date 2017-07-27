<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Order;
use App\OrderProduct;

class OrderController extends Controller
{


    public function index_unconfirmed()
    {
      $items = Order::where('confirmed',0)->paginate(15);
      return view('backend.orders.unconfirmed.index')->with('items',$items);
    }


    public function view_unconfirmed($id)
    {
      $item = Order::find($id);
      return view('backend.orders.unconfirmed.view')->with('item',$item);
    }

    public function view_packaging($id)
    {
      $item = Order::find($id);
      return view('backend.orders.packaging.view')->with('item',$item);
    }

    public function view_completed($id)
    {
      $item = Order::find($id);
      return view('backend.orders.completed.view')->with('item',$item);
    }
    public function index_packaging()
    {
      $items = Order::where('confirmed',1)->paginate(15);
      return view('backend.orders.packaging.index')->with('items',$items);
    }
    public function index_completed()
    {
      $items = Order::where('confirmed',2)->paginate(15);
      return view('backend.orders.completed.index')->with('items',$items);
    }

    public function confirm($id)
    {
      $order = Order::find($id);

      $order -> confirmed = 1;
      $order -> save();

      return redirect()->route('backend.orders.unconfirmed.index');
    }

    public function finish($id)
    {
      $order = Order::find($id);

      $order -> confirmed = 2;
      $order -> save();

      return redirect()->route('backend.orders.packaging.index');
    }


    public function cancel($id)
    {

      $order_products = OrderProduct::where('order_id',$id)->get();
      //dd($order_products);
      foreach($order_products as $order_product)
        $order_product->delete();


      $order = Order::find($id);
      $order->delete();

      return redirect()->back();
    }


}
