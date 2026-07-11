<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
    protected $fillable = [
        'shop_id',
        'category_id',
        'name',
        'image',
        'info',
        'price',
        'is_open',
        'sort',
    ];
}
