@extends('layouts.master')

@section('title','Cliente | ' . $cliente->id)

@section('content')
   
<div class="card">
    <div class="card-body">

        <p class="card-text">
            <strong>Nombre:</strong> {{ $cliente->Nombres}}<br>
            <strong>Apellido:</strong> {{ $cliente->Apellidos }}<br>
            <strong>Email:</strong> {{ $cliente->email }}<br>
            <strong>Direccion:</strong> {{ $cliente->direccion }}<br>
            <strong>Fono:</strong> {{ $cliente->fono }}<br>
        </p>
    </div>
</div>


@endsection