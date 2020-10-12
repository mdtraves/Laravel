@extends('layout')
@section('content')


<div id="fh5co-main">
    <div class="container">
        <div class="well">
            <div style="padding:100px;text-align:text-center">
                <h2>Squad List;</h2>
                <ul>
                  @foreach($Players as $player)
                    <li> {{ $player['Name'] }} </li>
                  @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection