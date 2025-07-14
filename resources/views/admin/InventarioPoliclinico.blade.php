@extends('layouts.main')

@section('titulo')
    Matrices de Inventario Políclinico de Bienestar
@endsection

@section('content')

<div class="card-group">
    <div class="card border-warning mb-3" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Control de inventario</h5>
        <p class="card-text">Registros de insumos</p>
        <a href="#" class="btn btn-primary">Control inventario</a>

      </div>
    </div>

    <div class="card border-warning mb-3" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Control Asistencia</h5>
        <p class="card-text">Registros de atenciones realizadas</p>
        <a href="#" class="btn btn-primary">Control asistencia</a>

      </div>
    </div>


    <div class="card border-warning mb-3" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Control Agenda</h5>
        <p class="card-text">Solicitudes de atención</p>
        <a href="#" class="btn btn-primary"> Control Agenda</a>

      </div>
    </div>
</div>

@endsection