@extends('layouts.bienestarvalpo')


@section('titulo')
Sitio para realizar: Test
@endsection


@section('content')
  <div class="card-deck">
    <div class="card">
<div class="card-body mt-5">
 <form id="tokenTest1">
   <div class="form-group">
    <label for="Test1">Test 1</label>
    <input type="text" class="form-control disabled" id="Test1" aria-describedby="Test1" value="testToken1">
    <small id="Test1" class="form-text text-muted">Presiona el boton para generar un token y analiza el resultado</small>
     <button type="submit" class="btn btn-warning mb-2">Test 1</button>
  </div>
 </form>
            
  
  
@isset($token)
    <div class="alert alert-success">Token recibido: {{ $token->token }}</div>
@else
    <div class="alert alert-danger">No se recibió ningún token.</div>
@endisset

</div>


<div class="card">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Lector de Datos</h5>
    <p class="card-text">Test de datos cargados desde excel en una matriz vacia para observar resultados durante la conexion a base de datos</p>
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
@endsection