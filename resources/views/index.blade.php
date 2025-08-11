@extends('layouts.main')

@section('titulo')
Panel de Inicio
@endsection

@section('subtitulo')
@endsection

@section('content')
<div class="w-100 bg-secondary mt-2 rounded">
   <div class="row justify-content-center" name="1 fila">
    <div class="col-3">
      <x-card-token-action />
    </div>
  </div>
  <h5 class="text-light text-center"> @yield('titulo')</h5>
  <h5 class="text-light text-center">@yield('subtitulo')</h5>
 
  <hr class="my-4 w-100">  
    <div class="row row-cols-1 row-cols-md-3 mx-2">
      <div class="col px-2">
        <x-card-menu-opcion tipo="text-white bg-warning" titulo="Desarrollo Humano y Laboral" detalle="Cargas Familiares, Traslados, Convivencia Laboral" /> 
        <a href="https://www.bienestarvalpo.cl/">
          <x-card-menu-opcion tipo="text-white bg-warning" titulo="Bienestar" detalle="Servicios sociales, Policlínico Médico-Dental, Información Reembolsos" /> 
        </a>
          <x-card-menu-opcion tipo="text-white bg-warning" titulo="Prevención de Riesgos" detalle="Salud Ocupacional, Informaciones, Denuncias, Redes" /> 
          <x-card-menu-opcion tipo="text-white bg-warning" titulo="Capacitaciones" detalle="Calendarios de actividades, Estadísticas" />

      </div>
      <div class="col">
      </div>
      <div class="col px-2">
        <x-card-menu-opcion tipo="card text-white bg-danger" titulo="Inducción" detalle="Comenzando la vida municipal" /> 
        <x-card-menu-opcion tipo="text-white bg-info" titulo="Jubilados" detalle="Incentivos al retiro" />
      </div>
    </div>

 
  <hr class="my-4 w-100"> 
  <div class="row justify-content-center" name="3 fila">
    <a href="{{route('notasDesarrollo')}}" class="btn btn-info m-3">Notas de desarrollo</a>
    <a href="{{route('spacewar')}}" class="btn btn-info m-3">spacewar</a>
    <a href="/test" class="btn btn-primary mx-3"  role="button">Sitio Pruebas</a>
    <a href="{{route('pias.login.form')}}" class="btn btn-primary disabled mx-3"  role="button">Test Pias</a>
  </div>     
</div>   
@endsection