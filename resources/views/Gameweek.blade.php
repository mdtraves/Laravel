@extends('layout')
@section('content')


<div id="fh5co-main">
    <div class="container">
        <div class="well">
            <div style="padding:100px;text-align:text-center">
                <h2>Gamweek List;</h2>
                <ul>
                  @foreach($Gameweeks as $gameweek)
                    <li> {{ $gameweek['id'] }} </li>
                  @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection