@extends('layouts.bienestarvalpo')

@section('titulo')
Inicio
@endsection

@section('content')
            <div class="jumbotron mt-2">
                <h1 class="display-4">Nuevo sitio BienestarValpo:  </h1>
                <h5 class=""><?php echo date("Y-m-d h:i:sa");?> </h5>
                <p class="lead">Estado: En desarrollo</p>
                <hr class="my-4">
                <p>Si necesita ver el sitio anterior.</p>
                <a class="btn btn-primary btn-lg" href="https://www.bienestarvalpo.cl/" role="button">Sitio Anterior</a>
                <a class="btn btn-primary btn-lg" href="/test" role="button">Sitio Pruebas</a>
                <a class="btn btn-primary btn-lg" href="{{route('pias.login.form')}}" role="button">Test Pias</a>
            </div>

            
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col mb-4">

                  <div class="card">
                    <img src="#" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Ingreso PIAS</h5>
                      <p class="card-text">Utilizar credenciales validadas por SUSESO</p>
                        <form method="POST" action="">
                          @csrf
                          <div class="mb-3">
                              <label for="codigo_entidad" class="form-label">Código Entidad</label>
                              <input type="text" class="form-control" id="codigo_entidad" name="codigo_entidad" value="1234" required>
                          </div>
                          <div class="mb-3">
                              <label for="login_usuario" class="form-label">Usuario</label>
                              <input type="text" class="form-control" id="login_usuario" name="login_usuario" value="pruebajose" required>
                          </div>
                          <div class="mb-3">
                              <label for="clave_usuario" class="form-label">Contraseña</label>
                              <input type="password" class="form-control" id="clave_usuario" name="clave_usuario" value="Q654321q." required>
                          </div>
                          <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                      </form>

                  
                    </div>
                  </div>
                </div>
                    <div class="col mb-4">
                  <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Lector de Datos</h5>
                      <p class="card-text">Test de datos cargados desde excel.</p>
                      @if(session('sucess'))
                        <p class="card-text">Cargado</p>
                        @else
                        <p class="card-text">No cargado.</p>
                      @endif
  
                    </div>
                    <div class="card-footer">
                      <form action="{{route('matriz.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="Importar Excel">Cargar archivo</label>
                        <input type="file" class="form-control-file" name="import_file" />  
                        <button class="btn btn-primary" type="submit">Actualizar</button>
                      </form>
                        <a href="#" class="btn btn-warning disabled">Visualizar Datos</a>
                    </div>
                  </div>
                
                </div>
                @guest
                <div class="col mb-4">
                  <div class="card">
                    <img src="{{asset('img/caballo-amarillo.PNG')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Registro</h5>
                      <p class="card-text">Estado: Pruebas de registro</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('test-register')}}" class="btn btn-primary">Ir a Registro</a>
                        <a href="{{route('test-login')}}" class="btn btn-primary">Ir a Login</a>
                    </div>
                  </div>
                </div>
                @endguest

                @auth
                <div class="col mb-4">
                  <div class="card">
                    <img src="{{asset('img/caballo-amarillo.PNG')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Registro</h5>
                      <p class="card-text">Estado: Pruebas de registro</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('testpost-index')}}" class="btn btn-primary">Ir a sesión</a>
                          <form method="POST" action="{{route('test-logout')}}">
                          @csrf
                          <button type="submit" class="btn btn-secondary btn-lg btn-block">Cerrar sesión</button>
                          </form>
                    </div>
                  </div>
                </div>
                @endauth
                
              </div>
            </div>
            

    
@endsection