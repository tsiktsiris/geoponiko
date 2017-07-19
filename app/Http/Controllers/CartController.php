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
    /*
    public function index()
    {

      $items = Session::get('cart.items');

      $citems = collect();
      if($items)
      {
        foreach($items as $item)
          $citems->push(Product::find($item));

      }
      //dd($citems);

      $categories = Category::all();
      $subcategories = SubCategory::all();
      //dd($products);
      return view('frontend.cart')->with('categories',$categories)->with('subcategories',$subcategories)->with('items',$citems);
    }
    */
    function __construct ()
    {
        //$this->cart = Session::get('cart');

    }

    public function index()
    {
      //$cart->setCart('cart1');

      $this->cart = Session::get('phpcart');
      //$this->cart = $this->cart->clear();
      //Session::flush();
    //  Session::forget('phpcart');
      //Session::put('phpcart',$this->cart);
      //dd($this->cart);

      if($this->cart)
        $citems = $this->cart->items();
      else {
        $citems = collect();
      }

      $categories = Category::all();
      $subcategories = SubCategory::all();
      //dd($products);
      return view('frontend.cart')->with('categories',$categories)->with('subcategories',$subcategories)->with('items',$citems);
    }

    public function add_item($id)
    {

      $product = Product::find($id);

      $this->cart = Session::get('phpcart');
      if(!$this->cart)
      $this->cart = new Cart();

      //$_SESSION['myCart'] = ;

      Session::put('phpcart', $this->cart);
      $this->cart->add([
          'id'       => $product->id,
          'name'     => $product->name,
          'quantity' => 1,
          'price'    => $product->price,
          'product_photo1' => $product->product_photo1
      ]);

      //dd($this->cart);
      return redirect()->back();
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
