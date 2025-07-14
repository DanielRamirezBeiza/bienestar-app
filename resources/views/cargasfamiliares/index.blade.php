@extends('layouts.main')



@section('titulo')
    Index Cargas familiares
@endsection

@section('content')
<h5>
  Menu de Cargas Familiares
  
</h5>

<div class="card-deck">
    <div class="card text-white bg-warning mb-3">
      <div class="card-body">
        
        <a href="{{route('cargasfamiliares-show')}}" class="btn btn-primary">Revisar</a>
      </div>
    </div>
    <div class="card text-white bg-secondary mb-3">
      <div class="card-body">
        <a href="{{route('cargasfamiliares-create')}}" class="btn btn-primary">Registrar</a>
      </div>
    </div>
    <div class="card text-white bg-success mb-3">
      <div class="card-body">
        <a href="#" class="btn btn-primary disabled">Actualizar</a>
      </div>
    </div>
    <div class="card text-white bg-danger mb-3">
        <div class="card-body">
          <a href="#" class="btn btn-primary disabled">Extinguir</a>
        </div>
      </div>
</div>

<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Lista de Cargas Familiares: Total {{$cargasFamiliares->count()}}</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Datos</th>
                            <th scope="col">Acciones</th> <!-- Opcional -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cargasFamiliares as $carga)
                            <tr>
                                <td>{{$carga->id}} </td>
                                <td>Nombre: {{ $carga->carga_nombre }}</td>
                                <td>
                                   <a href={{route('cargasfamiliares-show', $carga)}}" class="badge badge-pill badge-info">
                                        <i class="fas fa-edit"></i> Ver
                                    </a> 
                                    <a href="#" class="badge badge-pill badge-warning">
                                        <i class="fas fa-edit"></i> Actualizar
                                    </a> 
                                      <a href="#" class="badge badge-pill badge-danger">
                                        <i class="fas fa-edit"></i> Anular
                                    </a> 
                                   
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection