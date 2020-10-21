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
    public function incomplete (Todo $todo){
            $todo->update(['complete' => false]);
            return redirect()->back()->with('Message', 'Task Incomplete');
    }
    
    public function create (Request $todo){
        $todo = new Todo();
        $todo ->title = request('title');
        $todo ->complete = request('complete');
        $todo->save();
        return redirect('/todo-list');
    }

    public function update (Todo $todo){

        $todo->delete($todo->id);
        $todon = new Todo();
        $todon ->title = request('title');
        $todon ->complete = request('complete');
        $todon->save();
        return redirect('/todo-list');
    }

    public function delete(Todo $todo){
            $todo->destroy($todo->id);
            return redirect()->back()->with('Message', 'Task deleted');

    }

    public function edit(Todo $todo){
           return view('todos.edit', ['todo' => $todo]);

    }
}
