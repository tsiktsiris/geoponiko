<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Category;


class CategoryController extends Controller
{

    public function index()
    {
      $items = Category::paginate(15);
      return view('backend.category.index')->with('items',$items);
    }

    public function new()
    {
      return view('backend.category.new');
    }

    public function edit($id)
    {
      $item = Category::find($id);
      return view('backend.category.edit')->with('item',$item);
    }

    public function update(Request $request)
    {
      //dd($request->name);
      $category  = Category::find($request->id);
      $category -> name = $request->name;
      $category -> description = $request->description;
      $category -> priority = 0;
      $category -> save();

      return redirect()->route('backend.category.index');
    }

    public function store(Request $request)
    {
      //dd($request->name);
      $category  = new Category();
      $category -> name = $request->name;
      $category -> description = $request->description;
      $category -> priority = 0;
      $category -> save();

      return redirect()->route('backend.category.index');
    }


    public function delete($id)
    {
      //dd($request->name);
      $category  = Category::find($id);
      $category -> delete();

      return redirect()->route('backend.category.index');
    }
}
