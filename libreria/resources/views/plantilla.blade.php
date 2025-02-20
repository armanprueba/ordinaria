<html>
<head>
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<title>
@yield('titulo')
</title>
</head>
<body>
@include('partials.nav')
@yield('contenido')
</body>
</html>