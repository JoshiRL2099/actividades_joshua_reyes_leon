<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <body>
            <div class="card">
                <h1>Bienvenido</h1>
                <p>Esta es una página de bienvenida para las actividades de Desarrollo web</p>
                <div class="actions">
                    <a href="{{ url('/') }}">Inicio</a>
                    <a href="{{ url('/universes') }}" class="secondary">Universos</a>
                    <a href="{{ url('/superheroes') }}" class="secondary">Superhéroes</a>
                    <a href="{{ url('/superpowers') }}" class="secondary">Superpoderes</a>
                </div>
            </div>
        