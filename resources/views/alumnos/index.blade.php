@extends('layouts.app')
@section('title', 'Alumnos')
@section('content')

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Retroalimentación</th>
            <th>Calificación</th>
            <th>Escuela</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($alumnos as $alumno)
        <tr>
            <td>{{ $alumno->id }}</td>
            <td>{{ $alumno->nombre }}</td>
            <td>{{ $alumno->retroalimentación }}</td>
            <td>{{ $alumno->calificacion }}</td>
            <td>{{ $alumno->escuela }}</td>
            <td>{{ $alumno->email }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection