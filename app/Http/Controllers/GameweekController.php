<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gameweek;


class GameweekController extends Controller
{
    public function index(){
        return view('Gameweek', [
            'Gameweeks' => Gameweek::all()
        ]);
    }
}
