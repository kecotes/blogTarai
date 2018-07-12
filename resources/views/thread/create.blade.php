@extends('layouts.front')

@section('content')
<div class="row">
  @include('layouts.partials.error')

  @include('layouts.partials.success')

  @include('layouts.partials.categories')

  <div class="col-md-9">
    <div class="row content-heading w3-right w3-section"><a class="btn btn-primary pull-right" href="{{route('thread.create')}}">Crear Post</a><br></div>
    <div class="content-wrap well">

      <h3>Crear nuevo Post</h3>
      <br>
      <form action="{{route('thread.store')}}" method="post" id="create-thread-form">
        {{csrf_field()}}
        <fieldset>
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
            <textarea class="form-control" id="body" aria-describedby="" placeholder="Escribe el tipo" value="{{old('thread')}}" name="thread" type="text" ></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Enviar</button>
        </fieldset>
      </form>
    </div>
  </div>
</div>
@endsection



@section('scripts')
<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script>

		CKEDITOR.replace('body');

</script>
@endsection
