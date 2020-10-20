<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Todo;

class TodoController extends Controller
{
    public function index (){
        $todos =\App\Models\Todo::all();
        return view('todos.index', ['todos' => $todos]);
    }

    public function complete (Todo $todo){
            $todo->update(['complete' => true]);
            return redirect()->back()->with('Message', 'Task Complete');
    }
}
