<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;

use Illuminate\Foundation\Http\FormRequest;


use App\Article;

class ArticleRequest extends FormRequest

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

            'user_id'=> \Article::getAuthorAttribute(),
            'title' => 'required|min:3',
            'body' => 'required',
            'published_at' => 'required|date'

        ];
    }
}
