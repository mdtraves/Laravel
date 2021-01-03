@extends('layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="wrapper">
                <div class="todo-box">
                    <div class="todo-head">
                        <h2>Todo List - Editor</h2>
                        <form action="/todo-list/create" method="post">
                        @csrf
                        <input type="text" name="title" value="                    {{ $todo->title }}
">
                        <input type="hidden" name="complete" value="0">
                        <input type="submit" value="submit">
                        </form>
                    </div>
                    <div class="todo-body">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection