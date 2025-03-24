@extends('layouts.bienestarvalpo')



@section('titulo')
    Tu cuenta
@endsection

@section('content')
<h1>Sesión iniciada</h1>
<h5>Usuario: {{auth()->user()->rut}}</h5>
<img src="{{asset('img/caballo-amarillo.PNG')}}">


<div class="mb-5">
    <input type="checkbox" name="remember"><h5>¿Quieres mantener la sesión siempre iniciada?</h5>
</div>



@endsection