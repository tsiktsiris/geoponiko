<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
      return view('backend.home');
    }
}