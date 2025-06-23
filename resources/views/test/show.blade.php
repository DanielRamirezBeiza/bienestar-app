@extends('layouts.bienestarvalpo')


@section('titulo')
Tokens
@endsection

@section('subtitulo')
Lista de Tokens enviado
@endsection

@section('content')
<div class="card">
   <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Token</th>
                <th>Creado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tokenactions as $action)
                <tr>
                    <td>{{ $action->id }}</td>
                    <td>{{ $action->token }}</td>
                    <td>{{ $action->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

     <div class="d-flex justify-content-center">
        {{ $tokenactions->links() }}
    </div>
</div>
@endsection