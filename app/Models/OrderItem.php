<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id', 
        'quantity',
        'unit_amount',
        'total_method',
    ];
    
        public Function order(){
            return $this->belongsTo(Order::class);
        }

        public Function product(){
            return $this->belongsTo(Product::class);
        }
    
}
