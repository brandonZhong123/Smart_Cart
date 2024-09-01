<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'email', 'country', 'first_name', 'last_name', 'address',
        'apartment', 'city', 'postal_code', 'phone', 'subtotal',
        'shipping', 'sales_tax', 'total'
    ];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
