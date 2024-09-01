<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class OrderController extends Controller
{
    public static function checkout() {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('cart.checkout', [           
        'cart' => $cart->cartItems,
        'totalQty' =>$cart->totalQty, 
        'total'=>$cart->total]);
    }

    public function store(Request $request)
    {
        $cart = Session::get('cart'); // Retrieve cart from session

        if (!$cart || !$cart->cartItems) {
            return redirect('/cart')->with('error', 'Your cart is empty.');
        }

        $validated = $request->validate([
            'email' => 'required|email',
            'country' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'postal_code' => 'required|string',
        ]);

        $order = Order::create([
            'email' => $validated['email'],
            'country' => $validated['country'],
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'address' => $validated['address'],
            'apartment' => $request->input('apartment'),
            'city' => $validated['city'],
            'postal_code' => $validated['postal_code'],
            'phone' => $request->input('phone'),
            'subtotal' => $cart->total,
            'shipping' => 5.00, // Flat rate shipping
            'sales_tax' => round($cart->total * 0.13, 2),
            'total' => round($cart->total * 1.13 + 5.00, 2),
        ]);

        // Store each cart item in the order_items table
        foreach ($cart->cartItems as $cartItem) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cartItem['id'],
                'quantity' => $cartItem['qty'],
                'price' => $cartItem['price'],
                'item_name' => $cartItem['item'],
            ]);
        }

        // Clear the cart after placing the order
        Session::forget('cart');

        return redirect('/')->with('success', 'Order placed successfully!');
    }
}
