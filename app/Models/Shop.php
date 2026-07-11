<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    protected $fillable = [
        'name',
        'url',
        'admin_account',
        'admin_password',
        'email',
        'phone',
        'is_active',
    ];
}
