<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {
        $title='Product List';
        $products=Product::all();
//        dd($products);
       return view('backend.layouts.product.list',compact('title','products'));
    }

    public function createForm()
    {
        $title='Create New Product';
        return view('backend.layouts.product.create',compact('title'));
    }

    public function create(Request $request)
    {
        Product::create([
            'name'=>$request->product_name,
            'price'=>$request->product_price,
            'category_id'=>1
        ]);

        return redirect()->route('product.list');
    }
}
