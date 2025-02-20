@extends('plantilla')
@section('titulo', 'Inicio')
@section('contenido')
<h1>Nuevo libro</h1>
<form action="{{ route('libros.store') }}" method="POST">
<div class="row mb-3">
<div class="form-group">
<label for="titulo">Título:</label>
<input type="text" class="form-control" name="titulo"id="titulo">
</div>
<div class="form-group">
<label for="editorial">Editorial:</label>
<input type="text" class="form-control" name="editorial"id="
editorial">
</div>
<div class="form-group">
<label for="autor">Autor:</label>
<input type="text" class="form-control" name="precio"id="precio">
</div>
<input type="submit" name="enviar" value="Enviar" class="btn btn-dark
btn-block">
@endsection