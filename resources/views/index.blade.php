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
                      <form>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          <small id="emailHelp" class="form-text text-muted">Correo Electronico</small>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary disabled">Confirmar</button>
                      </form>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-warning disabled">Visualizar datos</a>
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
               
                <div class="col mb-4">
                  <div class="card">
                    <img src="{{asset('img/caballo-amarillo.PNG')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Registro</h5>
                      <p class="card-text">Estado: Pruebas de registro</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('test-register')}}" class="btn btn-primary">Ir a Registro</a>
                        <a href="#" class="btn btn-primary">Ir a Login</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            

    
@endsection