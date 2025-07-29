@extends('layouts.main')


@section('titulo')
Sitio para realizar diversos Test
@endsection


@section('content')
 <hr class="my-4 w-100">
  <div class="row justify-content-center" name="3 fila">
      <a class="btn btn-primary mx-3" href="https://www.bienestarvalpo.cl/" role="button">Sitio: BienestarValpo.cl</a>
      <a class="btn btn-primary mx-3" href="/test" role="button">Sitio Pruebas</a>
      <a class="btn btn-primary disabled mx-3" href="{{route('pias.login.form')}}" role="button">Test Pias</a>
  </div>
  
  <div class="card-deck">
    <div class="card border">
      <div class="card-body mt-2">
        <h5 class="card-title">Test 1: Generar Token</h5>
        <ul>
          <li>1.- Probar conexión a base de datos</li>
        </ul>
        <form id="tokenTest1" action="{{route('token.store', ['token'=>'Test_1->generado desde la vista Test']) }}" method="POST" novalidate>
          @csrf
          <div class="form-group">
            <p>Instrucciones: </p>
            <small id="Test1" class="form-text text-muted">Presiona el boton para generar un token y analiza el resultado</small>
            <button id="Test1" type="submit" class="btn btn-secondary mb-2 border">Token 1</button>
          </div>
        </form>
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
      </div>
       <div class="card-footer">
          <a href="{{route('token.show')}}" class="btn btn-info">Resultado</a>
      </div>
    </div>



    <div class="card border">
      <div class="card-body mt-2">
        <h5 class="card-title">Test 2: Lector de Datos</h5>
        <ul>
          <li>1.- Probar la compatibilidad del sistema con datos cargados de excel</li>
        </ul>
          <form action="{{route('matriz.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
              <input type="file" class="form-control-file" name="import_file" />  
                  <button class="btn btn-secondary disabled mt-2" type="submit">Actualizar</button>
                </form>
                  </div>
                        <div class="card-footer">
                            <a href="{{route('matriz.index')}}" class="btn btn-info">Resultado</a>
                        </div>
                        @if(session('sucess'))
                        <div class="alert alert-success">
                          {{ session('sucess') }}
                        </div>
                        @endif
    </div>

      <div class="card border">
        <div class="card-body mt-2">
          <h5 class="card-title">Test 3: Prueba de Js</h5>
          <ul>
            <li>1.- Probar una aplicación en Js simple</li>
          </ul>
        </div>
        <div class="card-footer">
            <a href="{{route('spacewar')}}" class="btn btn-info">Resultado</a>
        </div>
                   
    </div>


</div> 


 <div class="row justify-content-center" name="4 fila">
        <div class="col-5">
          <x-card-matriz-loader /> 
        </div>
        <div class="col-5">
          <x-card-auth/>
        </div>
  </div>
      
      

@endsection