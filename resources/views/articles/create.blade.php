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

                  <div class="form-group">

                    {!! Form::label('title', 'Title:') !!}
                    {!! Form::text('title', null , ['class' => 'form-control']) !!}

                  </div>

                  <div class="form-group">

                    {!! Form::label('body', 'Body:') !!}
                    {!! Form::textarea('body', null , ['class' => 'form-control']) !!}

                  </div>

                  <div class="form-group">

                    {!! Form::label('published_at', 'Publish on:') !!}

                  <!--  {!!  Form::date('published_at', \Carbon\Carbon::now()) !!} -->
                     {!! Form::input('date' , 'published_at', date('Y-m-d') , ['class' => 'form-control']) !!}

                  </div>

                  <div class="form-group">
                    {!! form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}

                  </div>


                  {!! Form::close() !!}

                      @if ($errors->any())

                        <ul class="alert alert-danger">

                              @foreach ($errors->all() as $error)

                              <li>{{ $error }}</li>

                              @endforeach

                        </ul>

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
