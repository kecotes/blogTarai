<div class="list-group">
  @forelse($threads as $thread)
  <a href="{{route('thread.show',$thread->id)}}" class="list-group-item list-group-item-action flex-column align-items-start light">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">{{$thread->subject}}</h5>
      <small>{{$thread->created_at}}</small>
    </div>
    <p class="mb-1">{{str_limit($thread->thread,100)}}</p>
  </a>
  @empty
    <h5>No hay historias</h5>

  @endforelse
</div>
