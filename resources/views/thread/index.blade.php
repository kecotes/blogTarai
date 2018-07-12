@extends('layouts.front')

@section('content')
<div class="jumbotron">
  <h1 class="display-3">Hola, Lectores!</h1>
  <p class="lead">Este espacio en internet es para ustedes, para que nos leamos y nos informemos de todos los temas actuales.</p>
  <hr class="my-4">
  <p>Para crear historias, comentar o dar estrellas registrate, es gratis, hagamos la comunidad mas grande.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="{{route('register')}}" role="button">Registrarme</a>
  </p>
</div>
<div class="row">
  @include('layouts.partials.categories')

  <div class="col-md-9">
    <div class="row content-heading w3-right w3-section"><a class="btn btn-primary pull-right" href="{{route('thread.create')}}">Crear Post</a><br></div>
    <div class="content-wrap well">
      <h3>Historias</h3>
      <br>
      @include('thread.partials.thread-list')

    </div>
  </div>
</div>
@endsection
