<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|'
*/

Route::get('/',function (){
    $title='Dashboard';
   return view('backend.master',compact('title'));
});
Route::get('/orders/list',[OrderController::class,'list'])->name('order.list');

//category routes
Route::get('/category/list',[CategoryController::class,'list'])->name('category.list');
Route::post('category/create',[CategoryController::class,'create'])->name('category.create');

//products routes
Route::get('/product/list',[ProductController::class,'list'])->name('product.list');
Route::get('product/create',[ProductController::class,'createForm'])->name('product.create');
Route::post('product/create',[ProductController::class,'create'])->name('product.create');
