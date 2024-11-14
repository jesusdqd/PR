<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprueba tu conocimiento</title>
</head>
<style>
        body {
            
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-weight: 800;
            font-style: normal;
        }
        .footer {
            text-align: center; 
            position: relative; 
            bottom: 0; 
            width: 90%; 
            margin: 0 auto;
            padding: 20px ; 
            color: #fff; 
            font-size: 12px;
        }
    </style>
<body>
    <!-- Incluir el navbar -->
    @include('html.navbar')

    <img src="{{ asset('Assets/Banner.png') }}" alt="Banner" class="banner">
    <nav>
        <div class="link-container">
            <a href="#Inicio">
                <img src="{{ asset('Assets/Iconos/Barra_Navegacion/InicioBottom.png') }}" alt="Icono de Inicio" style="margin-right: 20px;">Inicio</a>
            <a href="#examen">
                <img src="{{ asset('Assets/Iconos/Barra_Navegacion/Examen.png') }}" alt="Icono de Examen" style="margin-right: 20px;">Examen</a>
            <a href="#Ranking">
                <img src="{{ asset('Assets/Iconos/Barra_Navegacion/Trofeo.png') }}" alt="Icono de Ranking" style="margin-right: 20px;">Ranking</a>
            <a href="#juegos">
                <img src="{{ asset('Assets/Iconos/Barra_Navegacion/Mando.png') }}" alt="Icono de Juegos" style="margin-right: 20px;">Juegos</a>
            <a href="{{ url('Html/Registros/Login.html') }}">
                <img src="{{ asset('Assets/Iconos/Barra_Navegacion/Usuario.png') }}" alt="Icono de Sesion" style="margin-right: 10px;"> Iniciar sesión</a>
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
</body>
</html>
