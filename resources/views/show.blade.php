@extends('layouts.master')

@section('title','Alumno | ' . $alumno->id)

@section('content')
   
<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $alumno->nombre }} {{ $alumno->apellidos }}</h5>
        <p class="card-text">
            <strong>Curso:</strong> {{ $alumno->curso }}<br>
            <strong>Nota 1:</strong> {{ $alumno->nota1 }}<br>
            <strong>Nota 2:</strong> {{ $alumno->nota2 }}<br>
            <strong>Nota 3:</strong> {{ $alumno->nota3 }}<br>
            @php
                $promedio = ($alumno->nota1 + $alumno->nota2 + $alumno->nota3) / 3;
                $condicion = $promedio >= 5 ? 'Aprobado' : 'Desaprobado';
            @endphp
            <strong>Promedio:</strong> {{ number_format($promedio, 2) }}<br>
            <strong>Condición:</strong> {{ $condicion }}<br>
        </p>
    </div>
</div>
</div>

@endsection