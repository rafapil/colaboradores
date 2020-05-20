@extends('layouts.app')

@section('content')

<div class="flex-center position-ref full-height">

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <div class="content container">
        <h3>Painel de controle</h3>
        @foreach ($adms as $adm)



        <div class="links">
            <a href="https://laravel.com/docs">Escala de Plantão</a>
            <a href="https://blog.laravel.com">Cadastro Plantão</a>
            <a href="https://laracasts.com">Dados Pessoais</a>
            {{-- Essa vai ser para admin --}}
            @if ( $adm->adm == 1 || $adm->adm == 3 )
            <a href="https://laravel-news.com">Controle de Usuario</a>
            @endif
            {{-- Somente super admin ver como acessar --}}
            @if ( $adm->adm == 3 )
            <a href="https://nova.laravel.com">Admin</a>
            @endif

            {{-- Esse cara tera acesso a parte de gestão empresa --}}

            @endforeach

        </div>

    </div>
</div>

@endsection
