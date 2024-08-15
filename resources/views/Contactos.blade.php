@extends('layouts.master')

@section('Contactos')

@section('content')
    
<h1>Contactos</h1>
@if($op)
    <p>Parámetro op: {{$op}}</p>
    @else
    <p>sin párametros op.</p>
    @endif

@endsection

