<?php

use App\Http\Controllers\Backend\CategoryController;
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
   return view('backend.master');
});
Route::get('/orders/list',[OrderController::class,'list'])->name('order.list');

//category routes
Route::get('/category/list',[CategoryController::class,'list'])->name('category.list');
Route::post('category/create',[CategoryController::class,'create'])->name('category.create');
