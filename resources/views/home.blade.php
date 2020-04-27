@extends('layouts.app')

@section('content')

<div class="">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{-- Voce esta logado --}}
                    <!-- Aqui vamos adicionar o conteúdo que a gente fez de cadastro e que Deus ajude! -->

                    <div class="container w-container">


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
