@extends('layouts.bienestarvalpo')

@section('titulo')
    Matrices Blade php
@endsection

@section('content')

<div class="row pt-2 row-cols-1 row-cols-md-3"">
  <div class="col mb-4">
    <div class="card border-success">
     
        <div class="card-body">
          <h5 class="card-title">Datos Proexsy</h5>
          <p class="card-text">Descargar informe de afiliado y sus cargas para importar información.</p>
          @if(session('sucess'))
            <p class="card-text">Cargado</p>
            @else
            <p class="card-text">No cargado.</p>
          @endif
        </div>
        <div class="card-footer">
          <form action="{{route('matriz.storecargasbienestar')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="Importar Excel">Cargar archivo</label>
            <input type="file" class="form-control-file" name="import_file_proexsy" />  
            <button class="btn btn-primary" type="submit">Actualizar</button>
          </form>
        </div>
      </div>
  </div>

  <div class="col mb-4">
    <div class="card">

      <div class="card-body">
        <h5 class="card-title">Datos CAS</h5>
        <p class="card-text">Descargar e importar listado de cargas familiares de CAS Chile</p>
        @if(session('sucess'))
        <p class="card-text">Cargado</p>
        @else
        <p class="card-text">No cargado.</p>
      @endif
      </div>
      <div class="card-footer">
        <form action="{{route('matriz.storecargascas')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <label for="Importar Excel">Cargar archivo</label>
          <input type="file" class="form-control-file" name="import_file_cas" />  
          <button class="btn btn-primary" type="submit">Actualizar</button>
        </form>
      </div>
    </div>
  </div>

  <div class="col mb-4">
    <div class="card">
     
      <div class="card-body">
        <h5 class="card-title">Datos PIAS</h5>
        <p class="card-text">Descargar listado de reconocimientos vigentes PIAS</p>
        @if(session('sucess'))
        <p class="card-text">Cargado</p>
        @else
        <p class="card-text">No cargado.</p>
        @endif
      </div>
      <div class="card-footer">
        <form action="{{route('matriz.storecargasbienestar')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <label for="Importar Excel">Cargar archivo</label>
          <input type="file" class="form-control-file" name="import_file" />  
          <button class="btn btn-primary" type="submit">Actualizar</button>
        </form>
      </div>
    </div>
  </div> 
  <div class="col mb-4"> 
    <div class="card">
    
      <div class="card-body">
        <h5 class="card-title">Datos Cargas Vigentes</h5>
        <p class="card-text">Importar datos base con listado de reconocimientos</p>
        @if(session('sucess'))
        <p class="card-text">Cargado</p>
        @else
        <p class="card-text">No cargado.</p>
        @endif
      </div>
      <div class="card-footer">
        <form action="{{route('matriz.storecargasbienestar')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <label for="Importar Excel">Cargar archivo</label>
          <input type="file" class="form-control-file" name="import_file" />  
          <button class="btn btn-primary" type="submit">Actualizar</button>
        </form>
      </div>
    </div>
  <div class="col mb-4">
  </div>
@endsection