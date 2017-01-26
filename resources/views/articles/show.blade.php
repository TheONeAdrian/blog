@extends('layouts.app')

@section('content')

<div class="container">
  
      <h1>{{ $article->title}}</h1>

 <article>

        {{ $article->body }}

      </article>

<hr>
<br>

<a class="btn btn-info" href="{{ route('articles.edit',$article->id) }} ">edit</a>

	<div  style="display: inline-block;">
		{{ Form::open(['route' => ['articles.destroy', $article->id], 'method' => 'DELETE' ]) }}

        <button type="submit" class="btn btn-danger">Delete</button>

      {{ Form::close() }} 
	</div>



</div>

@endsection
