<?php

namespace App\Http\Controllers;
use App\Models\Article;

use Illuminate\Http\Request;

class BlogController extends Controller
{
 public function index(){
$articles = \App\Models\Article::take(2)->latest()->get();
    return view('Posts/index', [ 'articles' => $articles]);
    }

 public function show(Article $id){
    return view('Posts/show', [ 'article' => $id]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Posts/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    $request->validate([
        'title' => 'required',
        'excerpt' => 'required',
        'body' => 'required'
    ]);

      $post = new Article();

      $post->title = request('title');
      $post->excerpt = request('excerpt');
      $post->body = request('body');

      $post->save();

      return redirect('/blog');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = \App\Models\Article::findOrFail($id);
        return view('Posts/edit', [ 'article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        $post = \App\Models\Article::findOrFail($id);

        $post->title = request('title');
        $post->excerpt = request('excerpt');
        $post->body = request('body');
  
        $post->save();
  
        return redirect('/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}


