<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Game;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index(Request $request)
    {
        $games = Game::orderBy('id')->get();

        $characters = Character::with('game')
            ->when($request->filled('game'), function ($query) use ($request) {
                $query->where('game_id', $request->input('game'));
            })
            ->orderBy('id')
            ->paginate(12)
            ->withQueryString();
        return view('characters.index', [
            'characters' => $characters,
            'games' => $games,
        ]);
    }
}
