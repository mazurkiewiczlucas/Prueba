<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'HomeKeeper') }}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse"
          data-target="#nav-bar-menu-hamburguer" aria-controls="nav-bar-menu-hamburguer"
          aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="nav-bar-menu-hamburguer">
    <!-- Right Side Of Navbar -->
               <ul class="nav navbar-nav navbar-right">
                   <!-- Authentication Links -->
                   @guest
                       <li><a class="nav-link" href="{{ route('login') }}">¿Como funciona?</a></li>
                       <li><a class="nav-link" href="{{ route('register') }}">Quiero un Servicio</a></li>
                       <li><a class="nav-link" href="{{ route('registerprovider') }}">Quiero trabajar</a></li>
                       <li><a class="nav-link" href="{{ route('register') }}">Registrarse</a></li>
                       <li><a class="nav-link" href="{{ route('login') }}">Iniciar sesion</a></li>
                   @else
                       <li class="dropdown">
                           <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                               {{ Auth::user()->name }} <span class="caret"></span>
                           </a>

                           <ul class="dropdown-menu">
                               <li>
                                   <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                       Cerrar sesion
                                   </a>

                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                       {{ csrf_field() }}
                                   </form>
                               </li>

  </div>
     @endguest
</nav>
  @yield('content')
