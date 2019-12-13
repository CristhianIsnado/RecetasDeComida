@extends('layout')

@section('content')
    <h1 class="page-header">Listado de departamentos</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>CANTIDAD</th>
            </tr>
        </thead>
        <tbody>
            @foreach($departamentos as $departamento)
            <tr>
                <td>{{ $departamento->id }}</td>
                <td>{{ $departamento->nombre }}</td>
                <td>{{ $departamento->cantidad }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <p>
        <a href="{{ route('departamentos.pdf') }}" class="btn btn-sm btn-primary">
            Descargar departamentos en PDF
        </a>
    </p>
    <p>
        <a href="{{ route('plato') }}" class="btn btn-sm btn-primary">
            Visualizar Lista de Cantidad de Ingredientes por plato
        </a>
    </p>
@endsection
