@extends('layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="wrapper">
                <div class="todo-box">
                    <div class="todo-head">
                        <h2>Todo List</h2>
                    </div>
                    <div class="todo-body">
                        <ul>
                            @foreach( $todos as $todo)
                            <li><i class="fa fa-check fa-3x" aria-hidden="true" onclick="document.getElementById('form-{{ $todo->id }}').submit()"
                                    @if($todo->complete == 0)
                                    style="color:gray"
                                    @else
                                    style="color:green"
                                    @endif
                                    id="{{ $todo->id }}"></i>
                                <h2>{{ $todo->title }}</h2>
                                <span><i class="fa fa-pencil fa-2x" aria-hidden="true"></i><i class="fa fa-trash fa-2x"
                                        style="color:red;margin-left:15px" aria-hidden="true"></i></span>
                            </li>
                            <form action="{{route('todo-list',$todo->id )}}" method="post" style="display:none" id="form-{{ $todo->id }}">
                                @csrf
                                @method('put')
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