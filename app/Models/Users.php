<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
   public function basket()
    {
        return $this->hasOne(Baskets::class, 'user_id');
    }
}
