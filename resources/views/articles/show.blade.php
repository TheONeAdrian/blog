@extends('master')

@section('content')

<div class="container">
  <div class="col-md-3">
    <div class="panel panel-default">
      <div class="panel-heading">{{ $article->title}}</div>

    </div>

  </div>
  <div class="col-md-8">
    <div class="panel panel-default">
      <div class="panel-heading">{{ $article->title}}</div>

    </div>
    <div class="panel-default">
    <hr>

      <article>

        {{ $article->body }}

      </article>
    </div>

  </div>



</div>

@endsection
