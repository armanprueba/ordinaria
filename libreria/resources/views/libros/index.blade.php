@extends('plantilla')
@section('titulo', 'Inicio')
@section('contenido')

<table>
    <tr>titulo</tr>
    <tr>autor</tr>
    <tr>editorial</tr>
    <tr>ver</tr>
    @forelse($libros as $libro)
    
    <td>{{ $libro->titulo }}<</td>
    <td>{{ $libro->autor }}</td>
    <td>{{ $libro->editorial }}</td>
    @empty
    No hay elementos que mostrar
    @endforelse
    
</table>


@endsection