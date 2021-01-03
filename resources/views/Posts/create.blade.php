@extends('layout')
@section ('content')
<div id="fh5co-main">


    <form action="/blog" method="POST" class="form-group">
    @csrf
        <div class="container">
            <div class="row">
                <div class="col-sm-12"> <h3>Create a BlogPost</h3>
                </div>
                <div class="col-sm-12 "> <input type="text" style=" @error ('title') border: red 1px solid @enderror" name="title" placeholder="title" value="{{ old('title') }}">
                @error ('title')
                <span>Title is required</span>
                @enderror
                </div>
                <div class="col-sm-12"> <input type="text" name="excerpt" placeholder="excerpt">

                @error ('excerpt')
                <span>excerpt is required</span>
                @enderror            </div>
                <div class="col-sm-12"> <textarea name="body" id="" cols="30" rows="10" placeholder="blog body"></textarea>
                @error ('body')
                <span>body is required</span>
                @enderror
                </div>
                <div class="col-sm-12"> <input class="btn" type="submit" value="Submit">
                </div>
            </div>
        </div>
    </form>


    @endsection