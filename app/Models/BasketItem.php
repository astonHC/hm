<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class BasketItem extends Model
{
    use Hasfactory;

    protected $fillable = ['basket_id','product_id','quantity'];

    public function basket()
    {
        return $this->belongsTo(Basket::class);
    }

}
