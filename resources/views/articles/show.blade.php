@extends('layouts.app')

@section('content')

<div class="container">
  
      <h1>{{ $article->title}}</h1>

 <article>

        {{ $article->body }}

      </article>

<hr>
<br>

{{ Form::open(['route' => ['articles.edit', $article->id], 'method' => 'DELETE' ]) }}

    <button type="submit" class="btn btn-primary">Edit</button>

{{ Form::close() }}

{{ Form::open(['route' => ['articles.destroy', $article->id], 'method' => 'DELETE' ]) }}

    <button type="submit" class="btn btn-danger">Delete</button>

{{ Form::close() }}


</div>

@endsection
