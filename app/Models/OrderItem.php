<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'order_items';

    protected $fillable = [
        'order_id', 'product_id', 'product_title', 'product_slug', 'product_photo', 'price', 'quantity', 'amount'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
