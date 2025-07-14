<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title inertia>DHL I.M.Valparaíso{{-- config('app.name', 'Laravel') --}} @yield('titulo')</title>
        


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        @stack('styles')
        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    </head>

    <body class="font-sans antialiased">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand active" href="{{route('index')}}">DHL Inicio</a>
           
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item active text-white">
                    @auth
                      Bienvenido: <p class="text-white">{{auth()->user()->username}}</p>
                    @endauth
                    @guest
                      <a class="nav-link" href="{{route('test-register')}}">Registrarse <span class="sr-only">(current)</span></a>
                    @endguest
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('cargasfamiliares-index')}}">Cargas Familiares</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Salud Ocupacional</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Relaciones Laborales</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Ciclo de Vida Laboral</a>
                </li>


                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Bienestar
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Inscribirse</a>
                    <a class="dropdown-item" href="#">Reglamento</a>
                    <a class="dropdown-item" href="#">Solicitar Reembolsos</a>
                    <a class="dropdown-item" href="#">Revisar Reembolsos</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Guía del sitio</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled">Administración</a>
                </li>
              </ul>
                <span class="text-white bold mx-2">
                  @if(auth()->user())
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button mx-2" class="btn btn-secondary mt-1">Mi Sesión</button>
                    <form method="POST" action="{{route('test-logout')}}">
                      @csrf
                      <button type="submit" class="btn btn-secondary btn-lg btn-block">Cerrar sesión</button>
                      </form>
                  </div>
                  @else
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <button type="button mx-2 " class="btn btn-secondary mt-1">Iniciar Sesión</button>
                      <button type="button mx-2" class="btn btn-secondary mt-1">Registrarse</button>
                    </div>
                  @endif
                </span>>
                  
                  
            </div>
          </nav>


        
          <div class="d-flex flex-column align-items-center"> 
            <div class="card align-items-center bg-primary border border-dark rounded mt-2">
              <h5 class="text-light text-center">Vista: @yield('titulo')</h5>
              <p class="btn btn-danger">N° de tickets: # </p>
              <h5 class="text-light text-center">@yield('subtitulo')</h5>
              <p class="text-light text-center">Desarrolo Humano Laboral <?php echo date("h:i:sa d-m-Y ");?></p>
            </div>
        
          @yield('content')
          
          </div>
        
        </div>
    </div>
</body>
</html>
