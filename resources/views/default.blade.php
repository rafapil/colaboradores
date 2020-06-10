<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Colaboradores</title>

    <link href="{{ asset('css/app.css') }}" rel='stylesheet' />
    <link href="{{ asset('css/home.css') }}" rel='stylesheet' />

</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif
    </div>

    <div id='stars'></div>
    <div id='stars2'></div>
    <div id='stars3'></div>
    <div id='title'>
        <span>
            Colaboradores
        </span>
        <br>
        <span>
            Controle de Plantões
        </span>
        <footer class="text-light justify-content-end">
            <p id="prod">Desenvolvido por: Agencia Filgs - Rafael Filgueiras</p>
        </footer>
    </div>



</body>

</html>
