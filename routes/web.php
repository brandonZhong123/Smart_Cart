<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use GuzzleHttp\Middleware;

// Main Controller
Route::get('/', [MainController::class, 'index']);

// Product Controller
Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/create', [ProductController::class, 'create']);

Route::post('/products/store', [ProductController::class, 'store']);

Route::get('/products/{product}', [ProductController::class, 'show']);

// User Controller
Route::get('/register', [UserController::class, 'create']);

Route::get('/login', [UserController::class, 'login']);

Route::post('/users' , [UserController::class, 'store']);

Route::post('/logout', [UserController::class, 'logout']);

Route::post('/users/authenticate' , [UserController::class, 'authenticate']);

// Cart Controller

Route::get('cart', [CartController::class, 'viewCart']);

Route::get('cart/add/{id}', [CartController::class, 'addToCart']);

Route::get('cart/remove/{id}', [CartController::class, 'removeFromCart']);






