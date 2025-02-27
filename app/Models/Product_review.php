<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_review extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'rating',
        'customer_id',
        'product_id',
    ];

    function profile(){
        return $this->belongsTo(Customer_profile::class);
    }
}
