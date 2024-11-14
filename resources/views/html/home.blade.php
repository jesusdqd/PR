@extends('html.layouts.app') <!-- Aquí extiendes de tu layout -->

@section('content')

    <img src="{{ asset('Assets/Banner.png') }}" alt="Banner" class="banner">

    <nav>
        <div class="link-container">
            <a href="#Inicio">
                <img src="{{ asset('Assets/Iconos/Barra_Navegacion/InicioBottom.png') }}" alt="Icono de Inicio" style="margin-right: 20px;">Inicio</a>
            </a>
            <a href="#examen">
                <img src="{{ asset('Assets/Iconos/Barra_Navegacion/Examen.png') }}" alt="Icono de Examen" style="margin-right: 20px;">Examen</a>
            </a>
            <a href="#Ranking">
                <img src="{{ asset('Assets/Iconos/Barra_Navegacion/Trofeo.png') }}" alt="Icono de Ranking" style="margin-right: 20px;">Ranking</a>
            </a>
            <a href="#juegos">
                <img src="{{ asset('Assets/Iconos/Barra_Navegacion/Mando.png') }}" alt="Icono de Juegos" style="margin-right: 20px;">Juegos</a>
            </a>
            <a href="{{ url('Html/Registros/Login.html') }}">
                <img src="{{ asset('Assets/Iconos/Barra_Navegacion/Usuario.png') }}" alt="Icono de Sesion" style="margin-right: 10px;"> Iniciar sesión</a>
            </a>
            <div class="search-container">
                <div class="search-border">
                    <span class="search-icon">
                        <img src="{{ asset('Assets/Iconos/Barra_Navegacion/Busqueda.png') }}">
                    </span>
                    <input type="text" class="search-input" placeholder="Buscar...">
                </div>
            </div>
        </div>
    </nav>
@endsection
