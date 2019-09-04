<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product_discount', function () {
    return view('productForm');
});

Route::post('/product_discount', function (illuminate\http\request $request) {
    $description = $request->description;
    $description = $request->price;
    $description = $request->discount;

    if($request->description == $description && $request->price == $price && $request->discount == $discount){
        return view('discount_calculation');
    } else {
        return view('error')
    }

});

