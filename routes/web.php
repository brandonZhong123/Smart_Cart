<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/products', function () {
    return view('products',[
        'products' => Product::all()
    ]);
});

Route::get('/products/{id}', function($id) {
    return view ('product', [
        'product' => Product::find($id)
    ]);   

});


Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});


