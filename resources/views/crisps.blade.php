@extends('layout')
@section('content')


<div id="fh5co-main">
    <div class="container">
        <div class="well">
            <div style="padding:100px;text-align:text-center">
                <h2>Our Current Stock of Crisps;</h2>
                <ul>
                    @foreach ($crisps as $crisp)
                    <li> {{ $crisp['flavour'] }} - {{ $crisp['stock'] }} </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection