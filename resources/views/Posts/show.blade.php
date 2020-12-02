@extends('layout')
@section ('content')
		<div id="fh5co-main">
			
        
        <div style="margin:40px auto 60px auto">
              <h3>{{ $article['title'] }}</h3>  
              <h2>{{ $article['excerpt'] }}</h2>  
              <h5>{{ $article['body'] }}</h5>  
        </div>    
       

<a href="/blog/{{ $article->id }}/edit">
         <button class="btn">Edit this post</button></a>
    @endsection