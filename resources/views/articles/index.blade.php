@extends('layouts.app')

@section('content')

@if (session()->has('flash_notification.message'))
    <div class="alert alert-{{ session('flash_notification.level') }}">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

        {!! session('flash_notification.message') !!}
    </div>
@endif

<div class="container">
<div style="display: inline-block; margin-right: 10px;">
    <h1>Articles</h1>
  </div>
  
  <div style="display: inline-block;">
    <a href="articles/create">
      <i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i>
      </a>
  </div>

<hr>

    @foreach ($articles as $article)

      <article>

          <h2>

            <a href="{{ url('/articles', $article->id) }}"> {{ $article->title }} </a>

          </h2>

          <div class="body">

            {{ $article->body }}

          </div>


      </article>

    @endforeach
</div>
@endsection
