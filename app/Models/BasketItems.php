<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class BasketItems extends Model
{
    use HasFactory;

    // Define the table if it's not the default 'basket_items'
    protected $table = 'basket_items';

    // Define the fillable fields
    protected $fillable = [
        'basket_id',
        'product_id',
        'quantity',
    ];
}
