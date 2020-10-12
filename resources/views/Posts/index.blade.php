@extends('layout')
@section ('content')
		<div id="fh5co-main">
			<a href="blog/create" ><button class="btn">Create New Blog Post</button></a>
        @foreach($articles as $article)
        <div style="margin:40px auto 60px auto">
        <a href="/blog/{{$article['id'] }}">
              <h3>{{ $article['title'] }}</h3>  
              <h2>{{ $article['excerpt'] }}</h2>
              </a>  
        </div>    
        @endforeach

    @endsection