<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Product;
use App\ProductDetails;
use App\Category;
use App\SubCategory;

class ProductController extends Controller
{

    public function index()
    {
      $items = Product::paginate(15);
      return view('backend.products.index')->with('items',$items);
    }

    public function new()
    {
      $categories = Category::pluck('name','id');
      $subcategories = SubCategory::pluck('name','id');

      return view('backend.products.new')->with('categories',$categories)->with('subcategories',$subcategories);
    }

    public function store(Request $request)
    {
      $product  = new Product();
      $product -> category_id = SubCategory::find($request->subcategory)->category_id;
      $product -> subcategory_id = $request->subcategory;
      $product -> name = $request->name;
      $product -> description = $request->description;
      $product -> price = $request->price;
      $product -> dprice = $request->price;
      $product -> views = 0;
      $product -> sold = 0;
      //$product -> description = $request->description;
      $product -> save();

      if($request->product_photo1)
      {
        $photopath1 = $product->id."_1.jpg";
        $request->file('product_photo1')->move(public_path('images/products'),$photopath1);
        $product->product_photo1 = $photopath1;
        $product->save();
      }


      return redirect()->route('backend.products.index');
    }


    public function delete($id)
    {
      //dd($request->name);
      $product  = Product::find($id);
      $product -> delete();

      return redirect()->route('backend.products.index');
    }
}
