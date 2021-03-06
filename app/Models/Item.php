<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function ItemType()
    {
        return $this->belongsTo(ItemType::class, 'item_type_id', 'id');
    }
    public function category()
    {
        return $this->belongsTo(ItemCategory::class, 'category_id', 'id');
    }
}
