@extends('layouts.app')
@section('title', 'Inicio')
@section('content')
<div class="hero">
    <h1>Tu proyecto Laravel comienza aquí</h1>
    <p>Una base sencilla con autenticación, controladores MVC y vistas Blade. Crea una cuenta para entrar al panel.</p>
    @auth<a class="button" href="{{ route('dashboard') }}">Ir al panel</a>
    @else<a class="button" href="{{ route('register') }}">Crear cuenta</a>@endauth
</div>
@endsection
