<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name', 'sort', 'state'];

    public function towns()
    {
        return $this->hasMany(Town::class);
    }
}
