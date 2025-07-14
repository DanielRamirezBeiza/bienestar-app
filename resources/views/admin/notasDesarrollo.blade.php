@extends('layouts.main')

@section('titulo')
    Estados de avance
@endsection

@section('subtitulo')
    Apuntes, notas y comentarios para guiar la construcción del sitio
@endsection

@section('content')
<div class="card-deck">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Apunte 1: Objeto Señal, Realizado el 22/06/2025</h5>
        </div>
        <div class="card-body">
        <p class="card-text">El primer objeto realizado es un token que guarda la posición y las veces que es presionado</p>
        <form id="tokenTest1" action="{{route('token.store', ['token'=>'Generado en la sección de notasDesarrollo']) }}" method="POST" novalidate>
            @csrf
            <div class="form-group">
                <p>Instrucciones: </p>
                <small id="Test1" class="form-text text-muted">Presiona el boton para generar un token y analiza el resultado</small>
                <button id="Test1" type="submit" class="btn btn-secondary mb-2 border">Muestra</button>
            </div>
            </form>
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        
    </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Apunte 2: </h5>
        </div>
        <div class="card-body">
        <p class="card-text">El segundo objeto que se intenta construir es la identificación del nombre de una persona por su rut</p>
        
    </div>
    </div>
</div>

@endsection