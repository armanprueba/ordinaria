@extends('plantilla')
@section('titulo', 'Inicio')
@section('contenido')
@if(auth()->check())
<h2>Listado de socios<h2>
<table class="table table-dark">
    <tr>
    <th>socio</th>
    <th>email</th>
    <th>fecha de devolución</th>
    <th>acción</th>
    </tr>
    @forelse($socios as $socio)
    <tr>
    <td>{{ $socio->nombre }}</td>
    <td>{{ $socio->email }}</td>
    <td>{{ $socio->fechas }}</td>
    <td><button type="button" class="btn btn-light">Préstamos</button></td>
    </tr>
    @empty
    <h2>No hay elementos que mostrar<h2>

    @endforelse
    
</table>
@endif
@endsection