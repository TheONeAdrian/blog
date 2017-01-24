<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

<<<<<<< HEAD:app/Http/Requests/ArticleRequest.php
use App\Article;

class ArticleRequest extends FormRequest
=======
class CreateArticlesRequest extends FormRequest
>>>>>>> 74590bf419d7d834d7be336ce2ef0e9b06d61767:app/Http/Requests/CreateArticlesRequest.php
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
<<<<<<< HEAD:app/Http/Requests/ArticleRequest.php
            'user_id'=> \Article::getAuthorAttribute(),
            'title' => 'required|min:3',
            'body' => 'required',
            'published_at' => 'required|date'
=======
            //
>>>>>>> 74590bf419d7d834d7be336ce2ef0e9b06d61767:app/Http/Requests/CreateArticlesRequest.php
        ];
    }
}
