<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'color',
        'size',
        'qty',
        'price',
        'product_id',
        'user_id',
    ];

    function product(){
        return $this->belongsTo(Product::class);
    }
}
