<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Players;


class PlayersController extends Controller
{
    public function index(){
        return view('Players', [
            'Players' => Players::all()
        ]);
    }
}
