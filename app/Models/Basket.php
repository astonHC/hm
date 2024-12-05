<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Basket extends Model
{
    use Hasfactory;

    protected $fillable = ['user_id'];

    public function items()
    {
        return $this->hasMany(BasketItem::class);
    }
}
