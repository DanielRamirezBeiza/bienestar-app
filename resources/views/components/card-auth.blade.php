<div class="card mx-2">
    <div class="card-header">
        Control de Usuario:
    </div>
    <div class="card-body">
    @guest
        <h5 class="card-title">Seccion usuario invitado:</h5>
        <a href="{{route('test-register')}}" class="btn btn-primary">Ir a Registro</a>
        <a href="{{route('test-login')}}" class="btn btn-primary">Ir a Login</a>
    @endguest
                
    @auth
        <h5 class="card-title">Sección usuario autenticado</h5>
        
        <a href="{{route('testpost-index')}}" class="btn btn-primary">Ir a sesión</a>
        <form method="POST" action="{{route('test-logout')}}">
            @csrf
            <button type="submit" class="btn btn-secondary btn-lg btn-block">Cerrar sesión</button>
        </form>
    @endauth
    </div>
    <div class="card-footer">
    <p class="card-text">Estado: Test</p>    
    </div>
</div>