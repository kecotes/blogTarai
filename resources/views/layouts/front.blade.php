<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Foro Tarai</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/lumen/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
  </head>
  <body>
@include('layouts.partials.navbar')

@yield('banner')

    <div class="container">
<br>
      <div class="row">
        @section('category')
          @include('layouts.partials.categories')
        @show
        <div class="col-md-9">
          <div class="row content-heading"><a class="btn btn-primary pull-right" href="{{route('thread.create')}}">Crear Post</a><br></div>
          <div class="content-wrap well">
            @yield('content')
          </div>
        </div>
      </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
