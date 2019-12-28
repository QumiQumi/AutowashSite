<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ArticleController extends Controller
{

    public function index()
    {
        //
        $articles = Article::latest()->get();
        return view('pages.news.news', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        //
        return view('pages.news.show', ['article' => $article]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $article = new Article();
        $article->name = $request->name;
        $article->description = $request->description;
        $article->text = $request->text;
        $article->save();
        return redirect(route('news'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
        return view('pages.news.edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
        $article->name = $request->name;
        $article->description = $request->description;
        $article->text = $request->text;
        $article->save();
        return Redirect::to('news')
            ->with('success', 'Great! Product updated successfully');
        // return redirect(route('news'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
        $article->delete();
        return redirect(route('news'));
    }
}
