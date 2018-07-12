@extends('layouts.front')

@section('content')
<div class="row">
  <br>
  @include('layouts.partials.categories')
  <div class="col-md-9">
    <div class="row content-heading w3-right w3-section"><a class="btn btn-primary pull-right" href="{{route('thread.create')}}">Crear Post</a><br></div>
    <div class="content-wrap well">

    <h3> {!! $thread->subject !!} </h3>
    <hr>

    <div class="thread-details" id="slug">
      {!! $thread->thread !!}
    </div>

    <br>
    @if($idusers != null)
      @if(auth()->user()->id == $thread->user_id)
      <div class="actions">
          <a href="{{route('thread.edit',$thread->id)}}" class="btn btn-primary btn-xs">Edit</a>
          {{--//delete form--}}
          <form action="{{route('thread.destroy',$thread->id)}}" method="POST" class="inline-it">
              {{csrf_field()}}
              {{method_field('DELETE')}}
              <input class="btn btn-xs btn-danger" type="submit" value="Delete">
          </form>
      </div>
      @endif
    @endif

    <div class="comment-list">
        @foreach($thread->comments as $comment)

            <br><div class="list-group">
              <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">{{$comment->body}}</h5>
                  <small>{{$comment->created_at->format('d. M') }}  {{$comment->created_at->format('H') }} : {{$comment->created_at->format('i') }}</small>
                </div>
                <small>{{$comment->user->name}}</small>
              </a>
            </div>

          @if($idusers != null)
            @if(auth()->user()->id == $thread->user_id)

              <div class="actions">

                  {{--<a href="{{route('thread.edit',$thread->id)}}" class="btn btn-info btn-xs">Edit</a>--}}

                  <a class="btn btn-warning btn-xs" data-toggle="modal" href="#{{$comment->id}}">edit</a>
                  <div class="modal fade" id="{{$comment->id}}">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
                                  </button>
                                  <h4 class="modal-title">Cerrar</h4>
                              </div>
                              <div class="modal-body">
                                  <div class="comment-form">

                                      <form action="{{route('comment.update',$comment->id)}}" method="post" role="form">
                                          {{csrf_field()}}
                                          {{method_field('put')}}
                                          <legend>Editar comentario</legend>

                                          <div class="form-group">
                                              <input type="text" class="form-control" name="body" id="" placeholder="Input..." value="{{$comment->body}}">
                                          </div>

                                          <button type="submit" class="btn btn-primary">Guardar</button>
                                      </form>
                                 </div>
                              </div>

                          </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->


                  {{--//delete form--}}
                  <form action="{{route('comment.destroy',$comment->id)}}" method="POST" class="inline-it">
                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                      <input class="btn btn-xs btn-danger" type="submit" value="Delete">
                  </form>

              </div>
              @endif
            @endif
        @endforeach
        </div>

      <br><br>

      <div class="comment-form">

          <form action="{{route('threadcomment.store',$thread->id)}}" method="post" role="form">
               {{csrf_field()}}

              <legend>Escribe un comentario</legend>

              <div class="form-group">
                  <input type="text" class="form-control" name="body" id="" placeholder="Escribe aqui...">
              </div>



              <button type="submit" class="btn btn-secondary">Commentar</button>
           </form>

       </div>

     </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script>
	$(document).ready(function(){
	    $("#name, #slug").stringToSlug({
	        callback: function(text){
	            $('#slug').val(text);
	        }
	    });

	});
</script>
@endsection
