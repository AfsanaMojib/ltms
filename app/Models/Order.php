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
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function OrderProducts()
    {
        return $this->hasMany(OrderProduct::class, 'order_id', 'id');
    }
    public function getOrderDateAttribute()
    {
        return $this->created_at?->format('M d Y \,\a\t g:i A');
    }
}
