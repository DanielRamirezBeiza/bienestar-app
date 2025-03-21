@extends('layouts.bienestarvalpo')



@section('titulo')
    Tu cuenta
@endsection

@section('content')
<h1>Sesión iniciada</h1>
<h5>Usuario: {{auth()->user()->rut}}</h5>
<img src="{{asset('img/caballo-amarillo.PNG')}}"
@endsection