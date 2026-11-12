<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Inicio') · {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="topbar"><div class="shell">
        <a class="brand" href="{{ route('home') }}">{{ config('app.name') }}</a>
        <nav class="nav" aria-label="Navegación principal">
            @auth
                <a href="{{ route('dashboard') }}">Panel</a>
                <form method="POST" action="{{ route('logout') }}">@csrf<button class="link-button" type="submit">Cerrar sesión</button></form>
            @else
                <a href="{{ route('login') }}">Iniciar sesión</a>
                <a href="{{ route('register') }}">Crear cuenta</a>
            @endauth
        </nav>
    </div></header>
    <main class="main shell">@yield('content')</main>
</body>
</html>
