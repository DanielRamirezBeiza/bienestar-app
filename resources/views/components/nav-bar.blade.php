 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand active" href="{{route('index')}}">DHL Inicio</a>    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>        
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
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
            <div class="btn-group border" role="group">
            @if(auth()->user())
                <button type="button" class="btn btn-secondary btn-sm m-2 ">Mi Sesión</button>
                <form method="POST" action="{{route('test-logout')}}">
                    @csrf
                    <button type="submit" class="btn btn-secondary btn-sm m-2 ">Cerrar sesión</button>
                    </form>
                
            @else
                    <button type="button" class="btn btn-secondary btn-sm m-2">Iniciar Sesión</button>
                    <button type="button" class="btn btn-secondary btn-sm m-2 ">Registrarse</button>
        
            @endif
            </div>
        </span>>            
    </div>
</nav>
