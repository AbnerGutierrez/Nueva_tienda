@extends('layouts.app')
@section('title', 'Iniciar sesión')
@section('content')
<div class="card auth-card">
    <h1>Iniciar sesión</h1><p class="subtitle">Accede a tu cuenta para continuar.</p>
    @if (session('status'))<div class="status" role="status">{{ session('status') }}</div>@endif
    <form method="POST" action="{{ route('login') }}">@csrf
        <div class="field"><label for="email">Correo electrónico</label><input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus autocomplete="username">@error('email')<p class="error">{{ $message }}</p>@enderror</div>
        <div class="field"><label for="password">Contraseña</label><input id="password" name="password" type="password" required autocomplete="current-password">@error('password')<p class="error">{{ $message }}</p>@enderror</div>
        <div class="row"><label class="check"><input type="checkbox" name="remember" value="1"> Recordarme</label><a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a></div>
        <button class="button full" type="submit">Entrar</button>
    </form>
    <p class="footer-note">¿Aún no tienes cuenta? <a href="{{ route('register') }}">Regístrate</a></p>
</div>
@endsection
