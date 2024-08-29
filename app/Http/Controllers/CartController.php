<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    
    public function addToCart(Request $request, $productId)
    {
        $product = Product::find($productId);

        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);
        $cart->add($product, $productId);

        $request->session()->put('cart', $cart);
        //dd($request->session()->get('cart'));
        return redirect('/products');
    }

    public function removeFromCart(Request $request, $productId) {
        $product = Product::find($productId);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);
        $cart->remove($productId);

        $request->session()->put('cart', $cart);
        return redirect('/cart');
    }   
        

    public function viewCart() {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return view('cart.index', [
            'cart' => $cart->cartItems,
            'totalQty' =>$cart->totalQty, 
            'total'=>$cart->total
        ]);
    }

}