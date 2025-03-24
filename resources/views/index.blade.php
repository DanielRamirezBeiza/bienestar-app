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
            </div>

            
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col mb-4">
                  <div class="card">
                    <img src="#" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Primer Form</h5>
                      <p class="card-text">Json a partir de datos de un registro</p>
                      <form action="{{route('test-login')}}" method="POST" novalidate>
                          @csrf
                          
                          <div class="form-group">
                              <label for="Rut">Rut</label>
                              <input type="text" value="{{old('rut')}}" class="form-control" id="Rut" name="rut" aria-describedby="Rut">
                              @error('rut')
                                <div class="alert alert-warning" role="alert">
                                  {{$message}}
                                </div>
                              @enderror
                              <small id="Rut" class="form-text text-muted">Ingrese su rut con guión y sin puntos, es decir: "12345678-9" </small>
                            </div>
                          <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password">
                          </div> 
                          @error('password')
                          <div class="alert alert-warning" role="alert">
                            {{$message}}
                          </div>
                        @enderror
                          <button type="submit" value="Crear cuenta test" class="btn btn-primary mb-2">Presionar aquí para ser buena onda</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        
                    </div>
                  </div>
                  
                </div>
                <div class="col mb-4">
                  <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Lector de Datos</h5>
                      <p class="card-text">Test de datos cargados desde excel.</p>
                      <p class="card-text">No cargado.</p>
  
                    </div>
                    <div class="card-footer">
                      <form>
                        <div class="form-group">
                          <label for="exampleFormControlFile1">Cargar archivo</label>
                          <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
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