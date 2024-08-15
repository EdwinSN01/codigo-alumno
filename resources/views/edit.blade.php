@extends('layouts.master')

@section('title', 'Editar Cliente')

@section('content')
<h1>Editar Cliente</h1>

<form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="nombres">Nombre</label>
        <input type="text" class="form-control" id="nombres" name="nombres" value="{{ old('nombres', $cliente->nombres) }}">
        @if($errors->has('nombres'))
            <div class="text-danger">{{ $errors->first('nombres') }}</div>
        @endif
    </div>
    
    <div class="form-group">
        <label for="apellidos">Apellidos</label>
        <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ old('apellidos', $cliente->apellidos) }}">
        @if($errors->has('apellidos'))
            <div class="text-danger">{{ $errors->first('apellidos') }}</div>
        @endif
    </div>
    
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $cliente->email) }}">
        @if($errors->has('email'))
            <div class="text-danger">{{ $errors->first('email') }}</div>
        @endif
    </div>
    
    <div class="form-group">
        <label for="direccion">Dirección</label>
        <input type="text" class="form-control" id="direccion" name="direccion" value="{{ old('direccion', $cliente->direccion) }}">
        @if($errors->has('direccion'))
            <div class="text-danger">{{ $errors->first('direccion') }}</div>
        @endif
    </div>
    
    <div class="form-group">
        <label for="fono">Teléfono</label>
        <input type="text" class="form-control" id="fono" name="fono" value="{{ old('fono', $cliente->fono) }}">
        @if($errors->has('fono'))
            <div class="text-danger">{{ $errors->first('fono') }}</div>
        @endif
    </div>
    
    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
@endsection
