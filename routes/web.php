<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;

Route::get('/', [MainController::class, 'index']);

Route::get('/products', [ProductController::class, 'index']);

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


