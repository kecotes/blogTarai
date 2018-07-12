@extends('layouts.front')

@section('content')
<div class="row">
  @include('layouts.partials.error')

  @include('layouts.partials.success')

  @include('layouts.partials.categories')

  <div class="col-md-9">
    <div class="row content-heading w3-right w3-section"><a class="btn btn-primary pull-right" href="{{route('thread.create')}}">Crear Post</a><br></div>
    <div class="content-wrap well">

      <h3>Editar Post</h3>
      <br>
      <form class="form-vertical" action="{{route('thread.update',$thread->id)}}" method="post" role="form" id="create-thread-form">
        {{csrf_field()}}
        {{method_field('put')}}
        <fieldset>
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
    </div>
  </div>
</div>
@endsection
