<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\Product;
use App\Order;
use App\OrderProduct;
use Session;
use Anam\Phpcart\Cart;

class OrderController extends Controller
{
  public function store(Request $request)
  {
    $categories = Category::all();
    $subcategories = SubCategory::all();

    $order = new Order();
    $order->firstname = $request->firstname;
    $order->lastname = $request->lastname;
    $order->email = $request->email;
    $order->mobiletel = $request->mobiletel;
    $order->address = $request->address;
    $order->city = $request->city;
    $order->zipcode = $request->zipcode;
    $order->notes = $request->notes;
    $order->afm = $request->afm;
    $order->company = $request->company;
    $order->invoice = $request->invoice;
    $order->notes = $request->notes;
    $order->payment = $request->payment;

    if($order->payment == 2)
      $order->addcost = "3.50";

    $order->save();

    $cart = Session::get('phpcart');

    $items = $cart->getItems();

    foreach($items as $item)
    {
      $product = new OrderProduct();
      $product->order_id = $order->id;
      $product->name = $item->name;
      $product->qty = $item->quantity;
      $product->price = $item->price;
      $product->save();
    }

    Session::forget('phpcart');

    //dd($products);
    return view('frontend.order_complete')->with('payment',$order->payment);
  }

}
