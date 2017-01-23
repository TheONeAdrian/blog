@extends('layouts.app')

@section('content')

<div class="container">
  <!-- <div class="col-md-3">

  </div>
  <div class="col-md-8">
    <div class="panel panel-default">
      <div class="panel-heading">
-->
      <h1>{{ $article->title}}</h1>

  <!--  </div>

    </div>
    <div class="panel-default">
    <hr>


 -->
 <article>

        {{ $article->body }}

      </article>

<!--    </div>

  </div>
-->
<hr>
<br>

{{ Form::open(['route' => ['articles.destroy', $article->id], 'method' => 'DELETE' ]) }}

    <button type="submit" class="btn btn-danger">Delete</button>

{{ Form::close() }}

</div>

@endsection
