<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    public static function find($id) {
        $products = self::all();

        foreach($products as $product) {
            if ($product['id'] == $id) {
                return $product;
            }
        }
    }

    public function scopeFilter($query, array $filters) {
        if ($filters['search'] ?? false) {
            $query -> where ('title', 'like', '%' . request('search') . '%') -> orWhere('description', 'like', '%' . request('search'));
        }
    }
}
