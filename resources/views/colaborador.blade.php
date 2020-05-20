@extends('layouts.app')

@section('content')

<div class="flex-center position-ref full-height">

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <div class="container">
        <h3>Painel de controle</h3>
        @foreach ($adms as $adm)


        <ul class="list-group col-md-8 my-4">
            <li class="list-group-item active"><a href="#" class="text-decoration-none text-dark">Escala de Plantão</a>
            </li>
            <li class="list-group-item"><a href="/plantao" class="text-decoration-none text-dark">Cadastro
                    Plantão</a></li>
            <li class="list-group-item"><a href="/usuario" class="text-decoration-none text-dark">Dados
                    Pessoais</a></li>
            {{-- Essa vai ser para admin --}}
            @if ( $adm->adm == 1 || $adm->adm == 3 )
            <li class="list-group-item"><a href="/usuarios" class="text-decoration-none text-dark">Controle de
                    Usuario</a></li>
            @endif
            {{-- Somente super admin ver como acessar --}}
            @if ( $adm->adm == 3 )
            <li class="list-group-item"><a href="/home/admin" class="text-decoration-none text-dark">Admin</a>
            </li>
            @endif
        </ul>
        @endforeach



    </div>
</div>

@endsection
