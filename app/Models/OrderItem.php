<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    //
    //use HasFactory;

    // Define the table if it's not the default 'registers'
    protected $table = 'order_item';

    // Define the fillable fields
    protected $fillable = [
        //'order_item_id',
        'order_id',
        'product_id',
        'quantity',
    ];
}