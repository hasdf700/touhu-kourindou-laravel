<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = [
        'game_id',
        'name',
        'title',
        'description',
        'ability',
        'theme_music',
        'spell_card',
        'color',
        'accent_color',
        'image_path',
        'artist',
    ];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
