@extends('layouts.master')

@section('title', 'Crear Cliente')

@section('content')
<h1 colspan="4">Crear Nuevo Cliente</h1>
    <table cellpadding="3" cellspacing="5">

        <form action="{{ route('clientes.store') }}" method="post">
            @csrf
            <tr>
        <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombres" name="nombres">{{ $errors->first('nombres')}}
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" >{{ $errors->first('apellidos')}}
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">{{ $errors->first('email')}}
        </div>

        <div class="form-group">
            <label for="direccion">Direccion</label>
            <input type="text"  class="form-control" id="direccion" name="direccion">{{ $errors->first('direccion')}}
        </div>
        <div class="form-group">
            <label for="fono">Fono</label>
            <input type="number" step="0.01" class="form-control" id="fono" name="fono">{{ $errors->first('fono')}}
        </div>
    </tr>
    <tr>
        
    </tr>
    <tr>
        <button type="submit" class="btn btn-primary">Guardar</button>
            </tr>
        
        </form>
    </table>
@endsection
 