@extends('plantilla')
@section('titulo', 'Inicio')
@section('contenido')

<table class="table table-dark">
<h2>Listado de libros<h2>
    <tr>
    <th>titulo</th>
    <th>autor</th>
    <th>editorial</th>
    @if(auth()->check())
    <th>ver</th>
    @endif
    </tr>
    
    @forelse($libros as $libro)
    <tr>
    
    <td>{{ $libro->titulo }}</td>
    <td>{{ $libro->autor }}</td>
    <td>{{ $libro->editorial }}</td>
    @if(auth()->check())
    <td><button type="button" class="btn btn-light">Historial</button>
    <button type="button" class="btn btn-light">Prestamos</button>
    <button type="button" class="btn btn-light">Detalles del libro</button></td>
    @endif
    @empty
    No hay elementos que mostdar
    </tr>
    @endforelse
    
</table>


@endsection