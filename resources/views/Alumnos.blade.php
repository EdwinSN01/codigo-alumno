@extends('layouts.master')

@section('title', 'Alumnos')

@section('content')
<div class="container">

    <div class="d-flex justify-content-between align-items-center py-5">
        <h1>Listado de alumno</h1>
        <a href="{{ route('alumnos.create') }}" class="btn btn-primary">Crear Alumno</a>
    </div>

    @if ($alumnos->isEmpty())
        <p>No hay alumnos avilitados.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Curso</th>
                        <th>Nota 1</th>
                        <th>Nota 2</th>
                        <th>Nota 3</th>
                        <th>Promedio</th>
                        <th>Condición</th>
                        <th>Fecha Reg</th>
                    </tr>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $alumno)
                @php
                    $promedio = ($alumno->nota1 + $alumno->nota2 + $alumno->nota3) / 3;
                    $condicion = $promedio >= 5 ? 'Aprobado' : 'Desaprobado';
                @endphp
                <tr>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->apellidos }}</td>
                    <td>{{ $alumno->curso }}</td>
                    <td>{{ $alumno->nota1 }}</td>
                    <td>{{ $alumno->nota2 }}</td>
                    <td>{{ $alumno->nota3 }}</td>
                    <td>{{ number_format($promedio, 2) }}</td>
                    <td>{{ $condicion }}</td>
                    <td>{{ $alumno->created_at }}</td>
                </tr>
                <a href="{{ route('alumnos.show', $alumno) }}">{{ $alumno->titulo }}</a>
                        </td>
                       

                @endforeach
            </tbody>
        </table>
    @endif

    @if ($alumnos->isNotEmpty())
        <div class="pagination-wrapper">
            {{ $alumnos->links('vendor.pagination.bootstrap-4') }}
        </div>
    @endif
</div>
@endsection