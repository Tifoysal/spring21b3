<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function website()
    {
        $all_product=Product::all();
       return view('frontend.layouts.home',compact('all_product'));
    }
}
