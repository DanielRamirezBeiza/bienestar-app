@extends('layouts.main')

@section('titulo')
Index General
@endsection

@section('subtitulo')
@endsection

@section('content')
<div class="w-100 bg-secondary mt-2 rounded">
  <h5 class="text-light text-center">Vista: @yield('titulo')</h5>
  <h5 class="text-light text-center">@yield('subtitulo')</h5>
  <div class="row justify-content-center" name="1 fila">
    <div class="col-3">
      <x-card-token-action />
    </div>
  </div>
  <hr class="my-4 w-100">  
    <div class="row row-cols-1 row-cols-md-3 mx-2">
      <div class="col">
        <a href="{{route('spacewar')}}" class="btn btn-info m-3">Buscando pega</a>
        <a href="{{route('spacewar')}}" class="btn btn-info m-3">Iniciando</a>
        <a href="{{route('spacewar')}}" class="btn btn-info m-3">Bienestar</a>
        <a href="{{route('spacewar')}}" class="btn btn-info m-3">Jubilación</a>
      </div>
      <div class="col">
        <a href="{{route('notasDesarrollo')}}" class="btn btn-info m-3">Notas de desarrollo</a>
        <a href="{{route('spacewar')}}" class="btn btn-info m-3">spacewar</a>
      </div>
      <div class="col px-2">
        <x-card-menu-opcion titulo="Inducción" descripcion="Comenzando la vida municipal" /> 
        <x-card-menu-opcion titulo="Jubilados" descripcion="Ayudas para el retiro voluntario" /> 
      
      </div>
    </div>
   <hr class="my-4 w-100"> 
  <div class="row justify-content-center" name="4 fila">
        <div class="col-5">
          <x-card-matriz-loader /> 
        </div>
        <div class="col-5">
          <x-card-auth/>
        </div>
  </div>
  <hr class="my-4 w-100">
  <div class="row justify-content-center" name="3 fila">
      <a class="btn btn-primary mx-3" href="https://www.bienestarvalpo.cl/" role="button">Sitio: BienestarValpo.cl</a>
      <a class="btn btn-primary mx-3" href="/test" role="button">Sitio Pruebas</a>
      <a class="btn btn-primary disabled mx-3" href="{{route('pias.login.form')}}" role="button">Test Pias</a>
  </div>
  <hr class="my-4 w-100"> 

 
        
</div>   
@endsection