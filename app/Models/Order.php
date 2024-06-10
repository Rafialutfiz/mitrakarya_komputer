<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'user_id',
    'grand_total', 
    'payment_method',
    'payment_status', 
    'status', 
    'currecy',
    'shipping_amount',
    'shipping_method',
    'notes',
];

    public Function user(){
        return $this->belongsTo(User::class);
    }

    public Function items(){
        return $this->hasMany(OrderItem::class);
    }
    
    public Function address(){
        return $this->hasMany(Address::class);
    }
}
