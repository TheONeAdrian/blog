<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Article;

use App\Http\Requests\ArticleRequest;


class ArticlesController extends Controller
{
    
    public function __construct(Article $model)
    {
      $this->middleware('auth',['except' =>['show']]); 
      $this->model = $model;
    }

    public function index()
    {

        $articles = $this->model->latest('published_at')->published()->get();

        return view('articles.index', compact('articles'));


    }

    public function show($id)
    {

          $article = $this->model->findOrFail($id);


          return view('articles.show', compact('article'));


    }

    public function create()
    {

      return view('articles.create');

    }

    public function store(ArticleRequest $request)
    {

       $input = $request->all();

       Article::create($input);

    \Session::flash ('flash_message', 'Article succesfully created');

      return redirect('articles');

    }

    public function edit($id)
    {

        $article = Article::findOrFail($id);

        return view('articles.edit', compact('article'));

    }

    public function update($id, ArticleRequest $request)
    {

        $article = Article::findOrFail($id);

        $article->update($request->all());

        return redirect('articles');

    }

    public function destroy($id)
    {

        $article = $this->model->find($id);
        $article->delete();

        return redirect('articles');

    }

}
