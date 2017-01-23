<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Article;

use App\Http\Requests\ArticleRequest;

//use Requests;
//use Request;

class ArticlesController extends Controller
{

    public function __construct(Article $model)
    {
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

//          dd($article->published_at);

          return view('articles.show', compact('article'));


    }

    public function create()
    {

      return view('articles.create');

    }

    public function store(ArticleRequest $request)
    {

/*       $input = Request::all();
       $input['published_at'] = Carbon::now();

       Article::create($input);

       return redirect('articles');


      $this->validate($request, [
        'title' => 'required',
        'body' => 'required',
      ]);

        $input = $request->all();
        $input['published_at'] = \Carbon\Carbon::now();
*/
          $this->model->create($request->all());

      //      $this->model->save();

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

}
