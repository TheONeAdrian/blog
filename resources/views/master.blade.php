<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

  </head>
  <body>

    <div class="container">

     @if (Session::has('flash message'))
    <div class= "alert alert-success">
    {{ Session::get('flash message') }}
    </div>
    @endif 

    @yield('content')

    </div>

    @yield('footer')

  </body>
</html>
