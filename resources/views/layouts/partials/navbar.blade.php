<div class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
  <div class="container">
    <a href="../" class="navbar-brand">Tarai Software</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="./">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">Nosotros</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download">Servicios <span class="caret"></span></a>
          <div class="dropdown-menu" aria-labelledby="download">
            <a class="dropdown-item" href="#">Desarrollo de Software</a>
            <a class="dropdown-item" href="#">Clases Presenciales</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('thread.index')}}">Blog</a>
        </li>
      </ul>
      @if (Auth::guest())
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}" target="_blank">Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}" target="_blank">Ingresar</a>
        </li>
      </ul>
      @else
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download">{{ Auth::user()->name }} <span class="caret"></span></a>
          <div class="dropdown-menu" aria-labelledby="download">
            <a class="dropdown-item" href="#">Mi cuenta</a>
            <a href="{!! url('/logout') !!}" class="nav-link"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Salir
            </a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
          </div>
        </li>
      </ul>
      @endif
    </div>
  </div>
</div>
