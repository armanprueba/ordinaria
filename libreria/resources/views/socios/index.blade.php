@extends('plantilla')
@section('titulo', 'Inicio')
@section('contenido')
<table>
    <tr>socio</tr>
    <tr>email</tr>
    <tr>fecha de devolución</tr>
    <tr>accción</tr>
    @forelse($socios as $socio)
    
    <td>{{ $socio->nombre }}<</td>
    <td>{{ $socio->email }}</td>
    <td>{{ $socio->fechas }}</td>
    @empty
    <h2>No hay elementos que mostrar<h2>
    @endforelse
    
</table>
@endsection