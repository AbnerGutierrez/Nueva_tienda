@extends('layouts.app')
@section('title', 'Crear cuenta')
@section('content')
<div class="card auth-card">
    <h1>Crear cuenta</h1><p class="subtitle">Completa tus datos para empezar.</p>
    <form method="POST" action="{{ route('register') }}">@csrf
        <div class="field"><label for="name">Nombre</label><input id="name" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">@error('name')<p class="error">{{ $message }}</p>@enderror</div>
        <div class="field"><label for="email">Correo electrónico</label><input id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="username">@error('email')<p class="error">{{ $message }}</p>@enderror</div>
        <div class="field"><label for="password">Contraseña</label><input id="password" name="password" type="password" required autocomplete="new-password">@error('password')<p class="error">{{ $message }}</p>@enderror</div>
        <div class="field"><label for="password_confirmation">Confirmar contraseña</label><input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password"></div>
        <button class="button full" type="submit">Crear cuenta</button>
    </form>
    <p class="footer-note">¿Ya tienes cuenta? <a href="{{ route('login') }}">Inicia sesión</a></p>
</div>
@endsection
