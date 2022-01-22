<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'payment_method',
        'amount',
    ];
    public function OrderProducts()
    {
        return $this->hasMany(OrderProduct::class,'order_id','id');
    }
}
