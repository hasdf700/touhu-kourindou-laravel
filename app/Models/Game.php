<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['code', 'name', 'release_year', 'description'];

    public function characters()
    {
        return $this->hasMany(Character::class);
    }
}
