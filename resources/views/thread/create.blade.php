@extends('layouts.front')

@section('heading',"Crear Post")

@section('content')

  @include('layouts.partials.error')

  @include('layouts.partials.success')


<form action="{{route('thread.store')}}" method="post" id="create-thread-form">
  {{csrf_field()}}
  <fieldset>
    <legend>Crear un nuevo post</legend>
    <div class="form-group">
      <label for="exampleInputEmail1">Titulo</label>
      <input class="form-control" id="" aria-describedby="" placeholder="Escribe el titulo" value="{{old('subject')}}" name="subject" type="text" >
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Tipo</label>
      <input class="form-control" id="" aria-describedby="" placeholder="Escribe el tipo" value="{{old('type')}}" name="type" type="text" >
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Contenido</label>
      <textarea class="form-control" id="" aria-describedby="" placeholder="Escribe el tipo" value="{{old('thread')}}" name="thread" type="text" ></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
@endsection
