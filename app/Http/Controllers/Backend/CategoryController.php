<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function list()
    {
       $category_list=Category::all();//select * from categories;

     return view('backend.layouts.category.list',compact('category_list'));
    }

    public function create(Request $request)
    {
//        dd($request->all());
        //insert into categories table
        Category::create([
           'name'=>$request->name,
            'description'=>$request->description
        ]);
        // insert into categories(name,description) values($request->name,$request->description);

        return redirect()->back();

    }
}
