<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;


class SubCategoryController extends Controller
{


    public function index()
    {
      $items = SubCategory::paginate(15);
      $categories = Category::pluck('name','id');
      return view('backend.subcategory.index')->with('items',$items)->with('categories', $categories);
    }

    public function new()
    {
      $categories = Category::pluck('name','id');
      return view('backend.subcategory.new')->with('categories', $categories);
    }

    public function store(Request $request)
    {
      //dd($request->name);
      $category  = new SubCategory();
      $category -> category_id = $request->category;
      $category -> name = $request->name;
      $category -> description = $request->description;
      $category -> priority = 0;
      $category -> save();

      return redirect()->route('backend.subcategory.index');
    }


    public function delete($id)
    {
      $subcategory  = SubCategory::find($id);
      $subcategory -> delete();

      return redirect()->route('backend.subcategory.index');
    }

}
