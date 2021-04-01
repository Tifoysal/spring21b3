<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Frontend\HomeController;
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
// website / frontend routes here

Route::get('/',[HomeController::class,'website']);





//admin route here
Route::group(['prefix' => 'admin'], function () {

    Route::get('/', function () {
        $title = 'Dashboard';
        return view('backend.master', compact('title'));
    });
    Route::get('/orders/list', [OrderController::class, 'list'])->name('order.list');

//category routes
    Route::get('category/list', [CategoryController::class, 'list'])->name('category.list');
    Route::post('category/create', [CategoryController::class, 'create'])->name('category.create');

//products routes
    Route::group(['prefix'=>'product'],function ()
    {
        Route::get('list', [ProductController::class, 'list'])->name('product.list');
        Route::get('create', [ProductController::class, 'createForm'])->name('product.create');
        Route::post('create', [ProductController::class, 'create'])->name('product.create');

    });

});

