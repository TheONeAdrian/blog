<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = [
        'user_id',
        'title',
        'body',
        'published_at'
    ];

    protected $rules =['title', 'body'];

    /*
        additional fields to treat as carbon instances

    */

    protected $dates = ['published_at'];



/*
    scope queries to published articles

*/
    public function scopePublished($query)
    {

        $query->where('published_at', '<=', Carbon::now());

    }

/*

    scope queries to unpublished articles
*/
    public function scopeUnpublished($query)
    {

        $query->where('published_at', '>', Carbon::now());

    }

/*

      Set the published_at attribute

*/
    public function setPublishedAtAttribute($date)
    {

        $this->attributes['published_at'] = Carbon::parse($date);

    }

    public function getAuthorAttribute()
    {
       return Auth::user()->id;
    }

    /*
        An article is owned by a user
    */

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

}
