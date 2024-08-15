@extends('layouts.master')

@section('title', 'Clientes')

@section('content')
<div class="container">

    <div class="d-flex justify-content-between align-items-center py-5">
        <h1>Listado de clientes</h1>
        <a href="{{ route('clientes.create') }}" class="btn btn-primary">Crear clientes</a>
    </div>

    @if ($clientes->isEmpty())
        <p>No hay clientes.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <tr>
                        <th>Id</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Email</th>
                        <th>Direccion</th>
                        <th>Fono</th>
                    
                    </tr>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                @php
                @endphp
                <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->nombres }}</td>
                    <td>{{ $cliente->apellidos }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->direccion }}</td>
                    <td>{{ $cliente->fono }}</td>
                </tr>
                <a href="{{ route('clientes.show', $cliente) }}">{{ $cliente->titulo }}</a>
                
                        <td>
                            <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este cliente?')">Eliminar</button>
                            </form>
                        </td>

                @endforeach
            </tbody>
        </table>
    @endif

    @if ($clientes->isNotEmpty())
        <div class="pagination-wrapper">
            {{ $clientes->links('vendor.pagination.bootstrap-4') }}
        </div>
    @endif
</div>
@endsection