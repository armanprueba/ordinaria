<html>
<head>
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<title>
@yield('titulo')
</title>
</head>
<body>
<nav>
<!-- ... Menú de navegación -->
</nav>
@yield('contenido')
</body>
</html>