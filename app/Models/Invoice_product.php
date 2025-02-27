<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice_product extends Model
{
    use HasFactory;

    protected $table = [
        'qty',
        'sele_price',
        'invoice_id',
        'product_id',
        'user_id',
    ];

    function product(){
        return $this->belongsTo(Product::class);
    }
}
