@extends('layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="wrapper">
                <div class="todo-box">
                    <div class="todo-head">
                        <h2>Todo List</h2>
                        <form action="/todo-list/create" method="post">
                        @csrf
                        <input type="text" name="title">
                        <input type="hidden" name="complete" value="0">
                        <input type="submit" value="submit">
                        </form>
                    </div>
                    <div class="todo-body">
                        <ul>
                            @foreach( $todos as $todo)
                                    @if($todo->complete == 0)
                                    <li><i class="fa fa-check fa-3x" aria-hidden="true" onclick="document.getElementById('form-{{ $todo->id }}').submit()" style="color:red"  id="{{ $todo->id }}"></i>                                
                                    @else
                                    <li><i class="fa fa-check fa-3x" aria-hidden="true" onclick="document.getElementById('incomplete-form-{{ $todo->id }}').submit()" style="color:green"  id="{{ $todo->id }}"></i>
                                    @endif
                                        <h2>{{ $todo->title }}</h2>
                                        <span>
                                            <a href="{{route('todo-list-edit',[$todo->id ])}}">
                                                <i class="fa fa-pencil fa-2x" aria-hidden="true"></i>
                                            </a>
                                            <i class="fa fa-trash fa-2x" style="color:red;margin-left:15px" aria-hidden="true" onclick="document.getElementById('delete-form-{{ $todo->id }}').submit()"></i>
                                        </span>
                                    </li>
                                   
                            <form action="{{route('todo-list',$todo->id )}}" method="post" style="display:none" id="form-{{ $todo->id }}">
                                @csrf
                                @method('put')
                            </form>
                            <form action="{{route('todo-list-incomplete',$todo->id )}}" method="post" style="display:none" id="incomplete-form-{{ $todo->id }}">
                                @csrf
                                @method('put')
                            </form>
                            <form action="{{route('todo-list-delete',$todo->id )}}" method="post" style="display:none" id="delete-form-{{ $todo->id }}">
                                @csrf
                            </form>
                            @endforeach

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection