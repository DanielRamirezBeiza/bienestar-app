<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title inertia>BienestarValpo.app {{-- config('app.name', 'Laravel') --}} @yield('titulo')</title>
        

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    </head>

    <body class="font-sans antialiased">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">BIENESTAR</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="{{route('test-register')}}">Registrarse <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Políclinico</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Inventario</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Servicios
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
              <h5 class="text-white mx-2">Sesión {{now()}} :)</h2>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 disabled" type="search" placeholder="No habilitado" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
              </form>
            </div>
          </nav>
        <div class="container bg-primary border border-dark rounded mt-2">
            <h1 class="text-light text-center">BIENESTARVALPO</h1>
            <h4 class="text-light text-center">@yield('titulo')</h1>

        </div>

        <div class="container border border-dark rounded mt-2">
          
        @yield('content')


        </div>
    
</body>
</html>
