<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    protected $fillable = [
        'first_name',
        'last_name',
        'email_address',
        'phone_number',
        'password',
    ];
}