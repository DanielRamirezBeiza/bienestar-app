@extends('layouts.main')

@section('titulo')
Index General
@endsection


  @section('subtitulo')

@endsection

@section('content')
<div class="w-100 bg-secondary mt-2">
  <h5 class="text-light text-center">Vista: @yield('titulo')</h5>
  <h5 class="text-light text-center">@yield('subtitulo')</h5>
  <div class="row justify-content-center" name="1 fila">
    <div class="card align-items-center bg-primary border border-dark rounded m-2">
      <div class="card-header p-1">
        <p class="text-light text-center">Desarrolo Humano Laboral</p>
      </div>
      <div class="card-body p-1">
        <p class="btn btn-danger btn-small">N° de tickets: {{$totalTokens}} </p>
      </div>
      <div class="card-footer p-1">
        <p class="text-light text-center"> <?php echo date("h:i:sa d-m-Y ");?> </p>
      </div>
    </div>
  </div>
  <hr class="my-4 w-100">  
  <div class="row justify-content-center" name="2 fila">
      <a href="{{route('notasDesarrollo')}}" class="btn btn-info mx-3">Notas de desarrollo</a>
      <a href="{{route('spacewar')}}" class="btn btn-info mx-3">spacewar</a>
  </div> 
  <hr class="my-4 w-100">
  <div class="row justify-content-center" name="3 fila">
      <a class="btn btn-primary mx-3" href="https://www.bienestarvalpo.cl/" role="button">Sitio: BienestarValpo.cl</a>
      <a class="btn btn-primary mx-3" href="/test" role="button">Sitio Pruebas</a>
      <a class="btn btn-primary disabled mx-3" href="{{route('pias.login.form')}}" role="button">Test Pias</a>
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
 
        
</div>   
@endsection