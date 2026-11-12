@extends('layouts.app')
@section('title', 'Nueva contraseña')
@section('content')
<div class="card auth-card">
    <h1>Nueva contraseña</h1><p class="subtitle">Elige una contraseña nueva para tu cuenta.</p>
    <form method="POST" action="{{ route('password.update') }}">@csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="field"><label for="email">Correo electrónico</label><input id="email" name="email" type="email" value="{{ old('email', $email) }}" required autocomplete="username">@error('email')<p class="error">{{ $message }}</p>@enderror</div>
        <div class="field"><label for="password">Nueva contraseña</label><input id="password" name="password" type="password" required autocomplete="new-password">@error('password')<p class="error">{{ $message }}</p>@enderror</div>
        <div class="field"><label for="password_confirmation">Confirmar contraseña</label><input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password"></div>
        <button class="button full" type="submit">Guardar contraseña</button>
    </form>
</div>
@endsection
