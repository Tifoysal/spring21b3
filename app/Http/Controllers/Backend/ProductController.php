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
//        dd($request->file('image')->getClientOriginalExtension());

        $filename='';
        if($request->hasFile('image'))
        {
            //some code here to store into directory
                $file = $request->file('image');

                if ($file->isValid()) {
                    $filename =date('Ymdhms').'.'.$file->getClientOriginalExtension();
//                    dd($filename);
                    $file->storeAs('product', $filename);
                }

        }
        //store image into local directory


        // get a unique file name and store into database

        Product::create([
            'name'=>$request->product_name,
            'price'=>$request->product_price,
            'category_id'=>$request->category_id,
            'image'=>$filename
        ]);

        return redirect()->route('product.list');
    }
}
