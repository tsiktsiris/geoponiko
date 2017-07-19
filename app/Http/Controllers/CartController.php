<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\Product;
use Session;
use Anam\Phpcart\Cart;

class CartController extends Controller
{
  //public $cart;
  private  $cart;

    function __construct ()
    {
        //$this->cart = Session::get('cart');

    }

    public function index()
    {
      $this->cart = Session::get('phpcart');

      if($this->cart)
        $citems = $this->cart->items();
      else
        $citems = collect();

      $categories = Category::all();
      $subcategories = SubCategory::all();
      return view('frontend.cart')->with('categories',$categories)->with('subcategories',$subcategories)->with('items',$citems);
    }

    public function add_item($id,$qty)
    {

      $product = Product::find($id);

      $this->cart = Session::get('phpcart');

      if(!$this->cart)
      $this->cart = new Cart();

      Session::put('phpcart', $this->cart);
      $this->cart->add([
          'id'       => $product->id,
          'name'     => $product->name,
          'quantity' => $qty,
          'price'    => $product->price,
          'product_photo1' => $product->product_photo1
      ]);

      return redirect()->back();
    }

    public function update_item($id,$qty)
    {
      $product = Product::find($id);

      $this->cart = Session::get('phpcart');

      Session::put('phpcart', $this->cart);

      $this->cart->update([
          'id'       => $product->id,
          'quantity' => $qty
      ]);

      return "1";
    }

    public function remove_item($id)
    {
      $this->cart = Session::get('phpcart');
      $this->cart->remove($id);

      return redirect()->back();
    }

    public function clear()
    {
      $this->cart = Session::get('phpcart');
      $this->cart->destroy();

      return redirect()->back();
    }

}
