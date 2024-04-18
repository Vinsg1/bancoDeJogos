<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function index(string $c=null){

        if($c == 'aventura')
        $c = 1;
        else if($c == 'acao')
        $c = 2;
        else if($c == 'sobrevivencia')
        $c = 3;
        else if($c == 'rpg')
        $c = 4;

        $games = Game::find(3)->get()->where('category_id', $c);
        return view('gamesview')->with('games', $games);
    }
}
