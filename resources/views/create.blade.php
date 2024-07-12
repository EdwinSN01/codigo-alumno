@extends('layouts.master')

@section('title', 'Crear Alumno')

@section('content')
<h1 colspan="4">Crear Nuevo Alumno</h1>
    <table cellpadding="3" cellspacing="5">

        <form action="{{ route('alumnos.store') }}" method="post">
            @csrf
            <tr>
                <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre">{{ $errors->first('nombre')}}
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" >{{ $errors->first('nPerCodigo')}}
        </div>
        <div class="form-group">
            <label for="curso">Curso</label>
            <input type="text" class="form-control" id="curso" name="curso" >{{ $errors->first('curso')}}
        </div>
        <div class="form-group">
            <label for="nota1">Nota 1</label>
            <input type="number" step="0.01" class="form-control" id="nota1" name="nota1">{{ $errors->first('nota1')}}
        </div>
        <div class="form-group">
            <label for="nota2">Nota 2</label>
            <input type="number" step="0.01" class="form-control" id="nota2" name="nota2">{{ $errors->first('nota2')}}
        </div>
        <div class="form-group">
            <label for="nota3">Nota 3</label>
            <input type="number" step="0.01" class="form-control" id="nota3" name="nota3" >{{ $errors->first('nota3')}}
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
