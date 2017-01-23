
@extends('layouts.app')

@section('content')





<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Article</div>

                <div class="panel-body">
                  <h1>Write A New Article</h1>

                  {!! Form::open(['url' => 'articles']) !!}

                    @include('articles.form', ['submitButtonText' => 'Add Article'])

                  {!! Form::close() !!}

                      @include('errors.list')

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
