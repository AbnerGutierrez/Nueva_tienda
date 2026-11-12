@extends('layouts.app')
@section('title', 'Panel')
@section('content')
<div class="card">
    <h1>Hola, {{ auth()->user()->name }}</h1>
    <p>Has iniciado sesión correctamente. Este panel está protegido con el middleware <code>auth</code>.</p>
    <p class="muted">Correo: {{ auth()->user()->email }}</p>
</div>
@endsection
