@extends('layouts.bienestarvalpo')

@section('titulo')
Plataforma Autogestionada
@endsection

@section('content')
            <div class="jumbotron mt-2">
                <h1 class="display-4">Plataforma Social Para la Administración</h1>
                <h5 class=""><?php echo date("Y-m-d h:i:sa");?> </h5>
                <p class="lead">Estado: En desarrollo</p>
                  <a href="{{route('matriz.index')}}" class="btn btn-warning">Visualizar Datos</a>
                <hr class="my-4">
                <p>Menu de acciones.</p>
                <a class="btn btn-primary btn-lg" href="https://www.bienestarvalpo.cl/" role="button">Sitio Anterior</a>
                <a class="btn btn-primary btn-lg" href="/test" role="button">Sitio Pruebas</a>
                <a class="btn btn-primary btn-lg disabled" href="{{route('pias.login.form')}}" role="button">Test Pias</a>
            </div>

            
            <div class="row row-cols-1 row-cols-md-3">

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

                          <form action="{{route('matriz.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="Importar Excel">Cargar Datos</label>
                        <input type="file" class="form-control-file" name="import_file" />  
                        <button class="btn btn-primary disabled" type="submit">Actualizar</button>
                      </form>
  
                    </div>
                    <div class="card-footer">
                  
                        <a href="{{route('matriz.index')}}" class="btn btn-warning">Visualizar Datos</a>
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