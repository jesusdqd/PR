@extends('layouts.app') <!-- Esta línea indica que index.blade.php extiende de app.blade.php -->

@section('content')
    <!-- Aquí va todo el contenido específico de tu página -->
    <h1>Bienvenido a Aprueba tu Conocimiento</h1>
    <!-- Aquí puedes colocar el contenido que tienes en el index.php, ya no hace falta usar @include aquí si lo estás incluyendo en app.blade.php -->
    @include('html.navbar')
    @include('html.areas.areas')
    @include('chatbox')

    <div class="footer">
        <p>Este proyecto se basa en una página web en la cual puedas probar, desafiar y mejorar tus límites y conocimientos...</p>
    </div>
@endsection
