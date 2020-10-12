@extends('layout')
@section ('content')
<div id="fh5co-main">


    <form action="/blog/{{ $article->id }}" method="POST" class="form-group">
    @csrf
    @method('put')
        <div class="container">
            <div class="row">
                <div class="col-sm-12"> <h3>Edit the BlogPost</h3>
                </div>
                <div class="col-sm-12"> <input type="text" name="title"  value="{{ $article->title }}">
                @error ('title')
                <span>Title is required</span>
                @enderror
                </div>
                <div class="col-sm-12"> <input type="text" name="excerpt"  value="{{ $article->excerpt }}">
                @error ('excerpt')
                <span>Excerpt is required</span>
                @enderror
                </div>
                <div class="col-sm-12"> <textarea name="body" id="" cols="30" rows="10" >{{ $article->body }}</textarea>
                @error ('body')
                <span>Body is required</span>
                @enderror
                </div>
                <div class="col-sm-12"> <input class="btn" type="submit" value="Submit">
                </div>
            </div>  
        </div>
    </form>


    @endsection