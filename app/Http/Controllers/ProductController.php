<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public static function index() {
        return view ('products', ['products' => Product::all() ]);
    }

    public static function show(Product $product) {
        return view ();
    }
}
