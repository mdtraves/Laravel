<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crisps;


class CrispController extends Controller
{
    public function index()
    {
          
            return view('crisps', [
                  'crisps' =>   crisps::all()
            ]); 
    }
}
