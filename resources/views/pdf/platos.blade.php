@extends('layout')

@section('content')
    <h1 class="page-header">Informe de platos</h1>
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
                <td>{{ $plato->nombre }}</td>
                <td>{{ $plato->cantidad }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
