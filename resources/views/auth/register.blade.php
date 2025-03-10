@extends('layouts.bienestarvalpo')



@section('titulo')
    Regístro BienestarValpo.app
@endsection

@section('content')

<div class="alert alert-light text-monospace" role="alert">
    Este formulario es de pruebas y utilizados solo para versiones de desarrollo (no es una cuenta definitiva),
    el objetivo es realizar pruebas de interacción de usuarios, para lo que podrá ingresar datos ficticios. 
  </div>
<form action="{{route('test-register')}}" method="POST" novalidate>
    @csrf
    <div class="form-group">

      <div class="form-group">
        <label for="nombre">Nombre de usuario</label>
        <input type="text" class="form-control" value="{{old('name')}}" id="nombre" name="name" aria-describedby="nameHelp">
        @error('name')
          <div class="alert alert-warning" role="alert">
            {{$message}}
          </div>
        @enderror
        <small id="nameHelp" class="form-text text-muted">Nombre completo</small>
      </div>

      
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


      <label for="Email">Dirección de correo</label>
      <input type="email" value="{{old('email')}}" class="form-control" id="email" name="email" aria-describedby="emailHelp">
      @error('email')
      <div class="alert alert-warning" role="alert">
        {{$message}}
      </div>
    @enderror
      <small id="emailHelp" class="form-text text-muted">Modo de pruebas: ingrese correo ficticio</small>
    </div>
  
    <div class="form-group">
      <label for="password">Contraseña</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>

    <div class="form-group">
        <label for="repitePassword">Repita Contraseña</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
      </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Acepto participar en el ejercicio de desarrollo de BienestarValpo.app</label>
    </div>
    <button type="submit" value="Crear cuenta test" class="btn btn-primary mb-2">Crear Cuenta</button>
  </form>

@endsection