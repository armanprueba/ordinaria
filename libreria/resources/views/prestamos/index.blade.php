@extends('plantilla')
@section('titulo', 'Inicio')
@section('contenido')
<table>
    <tr>nombre</tr>
    <tr>email</tr>
    <tr>fechas</tr>
    <tr>ver</tr>
    @forelse($socios as $socio)
    
    <td>{{ $socio->nombre }}<</td>
    <td>{{ $socio->email }}</td>
    <td>{{ $socio->fechas }}</td>
    @empty
    No hay elementos que mostrar
    @endforelse
    
</table>
@endsection