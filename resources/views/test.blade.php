@extends('layouts.bienestarvalpo')


@section('titulo')
Sitio para realizar: Test
@endsection


@section('content')
  <div class="card-deck">

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