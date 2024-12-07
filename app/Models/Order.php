<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    //use HasFactory;

    // Define the table if it's not the default 'registers'
    protected $table = 'orders';

    // Define the fillable fields
    protected $fillable = [
        'order_id',
        'user_id',
        'order_date',
        'order_status',
        'total_amount',
        'payment_method',
        'payment_date',
        'amount_paid',

    ];
}