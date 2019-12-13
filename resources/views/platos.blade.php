@extends('layout')

@section('content')
    <h1 class="page-header">Listado de platos</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>CANTIDAD DE INGREDIENTES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($platos as $plato)
            <tr>
                <td>{{ $plato->id }}</td>
                <td>{{ $plato->titulo }}</td>
                <td>{{ $plato->cantidad }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <p>
        <a href="{{ route('platos.pdf') }}" class="btn btn-sm btn-primary">
            Descargar platos en PDF
        </a>
    </p>
    <p>
        <a href="{{ route('departamento') }}" class="btn btn-sm btn-primary">
            Visualizar Lista de Platos por departamento
        </a>
    </p>
@endsection
