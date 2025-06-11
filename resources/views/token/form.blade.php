@extends('layouts.bienestarvalpo')


@section('titulo')
Formulario para Generar Tokens
@endsection


@section('content')
<div class="container mt-5">
    <h4 class="mb-4">Evaluación rápida</h4>
    <form method="POST" action="{{ route('token.submit', $token->token) }}">
        @csrf
        <div class="form-group">
            <label for="eva">Evalúa del 1 al 10</label>
            <select name="eva" id="eva" class="form-control">
                @for ($i = 1; $i <= 10; $i++)
                    <option value="{{ $i }}" {{ old('eva') == $i ? 'selected' : '' }}>{{ $i }}</option>
                @endfor
            </select>
        </div>

        <div class="form-group">
            <label for="likert">¿Qué opinas?</label>
            <select name="likert" id="likert" class="form-control">
                @foreach ([
                    'Muy de Acuerdo', 'De Acuerdo', 'Ni de acuerdo ni en desacuerdo',
                    'En desacuerdo', 'Muy en desacuerdo'
                ] as $option)
                    <option value="{{ $option }}" {{ old('likert') == $option ? 'selected' : '' }}>
                        {{ $option }}
                    </option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection