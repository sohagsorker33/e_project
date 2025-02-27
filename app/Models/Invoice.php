<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'total',
        'vat',
        'payable',
        'cus_detalis',
        'ship_detalis',
        'tran_id',
        'val_id',
        'delivery_status',
        'payment_status',
        'user_id'
    ];
}
