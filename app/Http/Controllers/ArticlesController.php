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

    private $rules =['title', 'body'];

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

    public function store(Request $request)
    {
      $this->validates($request, $this->$rules);

      $article = new $this->model;

      $article->title = $request->title;

      $article->body =$request->body;

      $article->user_id = $request->user()->id;

      $article->save();

<<<<<<< HEAD
        $input = $request->all();
        $input['published_at'] = \Carbon\Carbon::now();
*/
        //  $this->model->create($request->all());

      //      $this->model->save();
=======
>>>>>>> 74590bf419d7d834d7be336ce2ef0e9b06d61767

      //return redirect('articles');

      $article = new Article($request->all());

      Auth::user()->articles()->save($article);

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
