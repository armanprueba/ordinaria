@if(auth()->check())
<nav class="navbar navbar-dark bg-dark">
<a href="{{ route('libros.create') }}">Nuevo libro</a>
&nbsp;&nbsp;
<a href="{{ route('libros.index') }}">Listado de libros</a>
&nbsp;&nbsp;
<a href="{{ route('socios.index') }}">Listado de socios</a>
&nbsp;&nbsp;
<a >Listado Prestamos</a>
</nav>
@endif