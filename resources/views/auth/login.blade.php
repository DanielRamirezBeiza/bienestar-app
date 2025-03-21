@extends('layouts.bienestarvalpo')



@section('titulo')
    Login BienestarValpo.app
@endsection

@section('content')
<div class="alert alert-light text-monospace" role="alert">
    Iniciar sesión de pruebas
  </div>
  @if(session('mensaje'))
    <div class="alert alert-warning" role="alert">
      {{session('mensaje')}}
    </div>
  @endif
<form action="{{route('test-login')}}" method="POST" novalidate>
    @csrf
    <div class="form-group">
    <div class="form-group">
        <label for="Rut">Rut</label>
        <input type="text" value="{{old('rut')}}" class="form-control" id="Rut" name="rut" aria-describedby="Rut">
        @error('rut')
          <div class="alert alert-warning" role="alert">
            {{$message}}
          </div>
        @enderror
        <small id="Rut" class="form-text text-muted">Ingrese su rut con guión y sin puntos, es decir: "12345678-9" </small>
      </div>
    <div class="form-group">
      <label for="password">Contraseña</label>
      <input type="password" class="form-control" id="password" name="password">
    </div> 
    @error('password')
    <div class="alert alert-warning" role="alert">
      {{$message}}
    </div>
  @enderror
    <button type="submit" value="Crear cuenta test" class="btn btn-primary mb-2">Presionar aquí para ser buena onda</button>
  </form>
@endsection