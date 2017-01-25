<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Article;

class HomeController extends Controller
{
    public function __construct(Article $model)
    {
        $this->model = $model;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = $this->model->latest('published_at')->published()->get();
        return view('articles.index', compact('articles'));
    }
}
