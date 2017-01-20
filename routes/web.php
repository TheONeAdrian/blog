<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*

Route::get('/', function () {
    return view('welcome');
});

*/
Route::get('/', 'WelcomeController@index');

//Route::get('/home', 'HomeController@index');
Route::group(['middleware' => 'auth'], function(){
  Route::get('/about', 'PagesController@about');
  Route::get('/contact', 'PagesController@contact');
  Route::get('articles', 'ArticlesController@index');
  Route::get('articles/create', 'ArticlesController@create');
  Route::get('articles/{id}', 'ArticlesController@show');
  Route::post('articles', 'ArticlesController@store');
});


Auth::routes();

Route::get('/home', 'HomeController@index');
