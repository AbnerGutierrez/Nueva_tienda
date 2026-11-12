@extends('layouts.app')
@section('title', 'Recuperar contraseña')
@section('content')
<div class="card auth-card">
    <h1>Recuperar contraseña</h1><p class="subtitle">Te enviaremos un enlace para restablecerla.</p>
    @if (session('status'))<div class="status" role="status">{{ session('status') }}</div>@endif
    <form method="POST" action="{{ route('password.email') }}">@csrf
        <div class="field"><label for="email">Correo electrónico</label><input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus autocomplete="email">@error('email')<p class="error">{{ $message }}</p>@enderror</div>
        <button class="button full" type="submit">Enviar enlace</button>
    </form>
    <p class="footer-note"><a href="{{ route('login') }}">Volver a iniciar sesión</a></p>
</div>
@endsection
