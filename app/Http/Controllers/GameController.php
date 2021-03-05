<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index() {
        return view('website.game');
    }

    public function details($id) {
        // $gm = Game::where('id', $id)->get();
        $gm = Game::findOrFail($id);
        return view('website.gamedetails', compact('gm'));
    }
}
