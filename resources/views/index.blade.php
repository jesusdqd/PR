@extends('layouts.app') <!-- Esto extiende el layout app.blade.php -->

@section('content')
    <h1>Bienvenido a Aprueba tu Conocimiento</h1>

    <!-- El navbar solo debe estar en el layout, no necesitas incluirlo nuevamente aquí -->

    <img src="{{ asset('Assets/Banner.png') }}" alt="Banner" class="banner">
    <!-- Agregar contenido específico de la página -->
    @include('html.areas.areas')  <!-- Esto está bien si se necesita incluirlo aquí -->
    @include('chatbox')  <!-- Esto también si es necesario en esta página -->

    <div class="footer">
        <p>Este proyecto se basa en una página web en la cual puedas probar, desafiar y mejorar tus límites y conocimientos...</p>
    </div>
@endsection
