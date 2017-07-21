<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\Product;
use Session;

class HomeController extends Controller
{
    public function index()
    {
      $categories = Category::all();
      $subcategories = SubCategory::all();

      $products = Product::orderBy('id', 'desc')->limit(6)->get();
      //dd($products);
      return view('frontend.home')->with('categories',$categories)->with('subcategories',$subcategories)->with('products',$products);
    }

    public function order_completed()
    {
      $categories = Category::all();
      $subcategories = SubCategory::all();

      return view('frontend.order_complete')->with('categories',$categories)->with('subcategories',$subcategories);
    }

    public function shop($cat)
    {

      if($cat==0)
        $products = Product::orderBy('id', 'desc')->paginate(6);
      else
        $products = Product::where('subcategory_id',$cat)->orderBy('id', 'desc')->paginate(6);


      $categories = Category::all();
      $subcategories = SubCategory::all();
      //dd($products);
      return view('frontend.shop')->with('categories',$categories)->with('subcategories',$subcategories)->with('products',$products);
    }


    public function viewproduct($id)
    {
      $product = Product::where('id',$id)->first();


      $subcategory = $product->subcategory_id;

      $related = Product::where('subcategory_id',$subcategory)->where('id',"<>",$product->id)->take(3)->get();

      $categories = Category::all();
      $subcategories = SubCategory::all();
      //dd($products);
      return view('frontend.viewproduct')->with('categories',$categories)->with('subcategories',$subcategories)->with('product',$product)->with('related',$related);
    }

    public function cart()
    {
      $categories = Category::all();
      $subcategories = SubCategory::all();
      //dd($products);
      return view('frontend.cart')->with('categories',$categories)->with('subcategories',$subcategories);
    }


    public function checkout()
    {
      $cart = Session::get('phpcart');

      $categories = Category::all();
      $subcategories = SubCategory::all();
      //dd($products);
      return view('frontend.checkout')->with('categories',$categories)->with('subcategories',$subcategories)->with('cart',$cart);


    }


}
