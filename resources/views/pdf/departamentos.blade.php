@extends('layout')

@section('content')
    <h1 class="page-header">Informe de departamentos</h1>
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
@endsection
