@extends('layouts.front')

@section('heading')
    <h4>Edit Thread</h4>
@endsection

@section('content')

  @include('layouts.partials.error')

  @include('layouts.partials.success')


  <form class="form-vertical" action="{{route('thread.update',$thread->id)}}" method="post" role="form" id="create-thread-form">
  {{csrf_field()}}
  {{method_field('put')}}
  <fieldset>
    <legend>Crear un nuevo post</legend>
    <div class="form-group">
      <label for="exampleInputEmail1">Titulo</label>
      <input class="form-control" id="" aria-describedby="" placeholder="Escribe el titulo" value="{{$thread->subject}}" name="subject" type="text" >
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Tipo</label>
      <input class="form-control" id="" aria-describedby="" placeholder="Escribe el tipo" value="{{$thread->type}}" name="type" type="text" >
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Contenido</label>
      <textarea class="form-control" id="" aria-describedby="" placeholder="Escribe el tipo" name="thread" type="text" >{{$thread->thread}}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
@endsection
