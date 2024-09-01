<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public static function index() {
        return view ('products.index', ['products' => Product::latest()->filter(request(['search'])) ->get() ]);
    }

    public static function show(Product $product) {
        return view ('products.show', ['product' => $product ] );
    }

    public static function create() {
        return view ('products.create');
    }

    public static function store(Request $request) {
        $formFields = $request->validate( [
            'title' => ['required'],
            'company' =>['required'],
            'description' => ['nullable'],
            'email' =>['required', 'email'],
            'price' => ['required']
        ]);


        if($request->hasFile('picture')) {
            $formFields['picture'] = $request->file('picture')->store('pictures', 'public');
        }

        Product::create($formFields);

        return redirect('/products');

    }
}
