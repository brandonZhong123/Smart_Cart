<?php

namespace App\Models;

use App\Models\Product;


class Cart 
{
    public $cartItems = null;
    public $totalQty = 0;
    public $total = 0;

    public function __construct($oldCart){
        
        if($oldCart) {
            $this->cartItems = $oldCart->cartItems;
            $this->totalQty = $oldCart->totalQty;
            $this->total = $oldCart->total;
        }
    }

    public function add(Product $product, $id) {
        $storedItem = [
            'qty' => 0,
            'price' => $product->price,
            'originalPrice' => $product->price,
            'item' => $product->title,
            'company' => $product->company,
            'id' => $id,
            'picture' => $product->picture
        ];
        
        if (isset($this->cartItems[$id])) {
            $storedItem = $this->cartItems[$id];
        }
        
        $storedItem['qty']++;
        $storedItem['price'] = $product->price * $storedItem['qty'];
        
        $this->cartItems[$id] = $storedItem;
        
        $this->totalQty++;
        $this->total += $product->price;        

    }

    public function remove($id) {
        $item = $this->cartItems["$id"];
            
        $this->totalQty -= $item['qty'];
        $this->total -= $item['price'];
            
        unset($this->cartItems["$id"]);

    }
}
