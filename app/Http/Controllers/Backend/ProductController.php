<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {
        $title='Product List';
        $products=Product::with('productCategory')->get();
//        dd($products);
       return view('backend.layouts.product.list',compact('title','products'));
    }

    public function createForm()
    {
        $title='Create New Product';
        $categories=Category::all();
//        dd($categories);
        return view('backend.layouts.product.create',compact('title','categories'));
    }

    public function create(Request $request)
    {

        Product::create([
            'name'=>$request->product_name,
            'price'=>$request->product_price,
            'category_id'=>$request->category_id
        ]);

        return redirect()->route('product.list');
    }
}
