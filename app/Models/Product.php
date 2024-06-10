<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
    'category_id',
    'brand_id', 
    'name', 
    'slug', 
    'images',
    'description',
    'price', 
    'is_active',
    'is_featured',
    'in_stock',
    'on_sale',
];

    protected $casts = [
        'images' => 'array',
    ];

    public Function category(){
        return $this->belongsTo(Category::class);
    }

    public Function brand(){
        return $this->belongsTo(Brand::class);
    }

    public Function orderItems(){
        return $this->hasMany(OrderItem::class);
    }
}
