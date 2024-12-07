<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    //use HasFactory;

    // Define the table if it's not the default 'registers'
    protected $table = 'addresses';

    // Define the fillable fields
    protected $fillable = [
        'address_id',
        'user_id',
        'street_address',
        'city',
        'county',
        'country',
        'post_code',
        'shipping_address',
    ];
}