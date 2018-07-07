
    <div class="navbar navbar-expand-lg navbar-dark bg-primary">
     <div class="container">
         <a href="./" class="navbar-brand"><img src=""> Tarai</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class="navbar-nav">
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Inicio <span class="caret"></span></a>
             <div class="dropdown-menu" aria-labelledby="themes">
               <a class="dropdown-item" href="./default/">Default</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="./cerulean/">Cerulean</a>
             </div>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="./help/">Servicios</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="">Blog</a>
           </li>
         </ul>

         <ul class="nav navbar-nav ml-auto">
           @if (Auth::guest())
           <li class="nav-item">
             <a class="nav-link" href="{{route('register')}}">Registrarse</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="{{route('login')}}">Ingresar</a>
           </li>
           @else
           <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="">
                        Logout
                    </a>

                    <a href="">
                        My Profile
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
                @endif
         </ul>

       </div>
     </div>
</div>
