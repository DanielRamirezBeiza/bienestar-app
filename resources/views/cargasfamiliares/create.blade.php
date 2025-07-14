@extends('layouts.main')



@section('titulo')
    Index Cargas familiares
@endsection

@push('styles')
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('content')
<h5>Formulario para Registrar carga familiar</h5>


<div class="container">
  <form action="{{route('cargasfamiliares-store')}}" method="POST" novalidate>
  @csrf
  <div class="form-group border border-primary">
        <label for="nombre carga familiar">1 Nombre completo causante de carga familiar</label>
        <div class="form-row">
            <div class="col">
            <input name="carga_nombre" value="{{old('carga_nombre')}}" type="text" class="form-control mb-1" id="nombre carga familiar" placeholder="nombre carga familiar">
              
              @if(session('success'))
                <div class="alert alert-warning">
                {{ session('success') }}
                </div>
              @endif
              
              @if(session('error'))
                <div class="alert alert-danger">
                  {{ session('error') }}
                </div>
              @endif

              @error('carga_nombre')
                <div class="alert alert-warning" role="alert">
                {{$message}}
                </div>
              @enderror
            </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Registrar</button>
      </div>
  </form>
</div>


@endsection