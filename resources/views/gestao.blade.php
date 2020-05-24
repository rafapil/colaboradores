{{-- Essa view é somente para fazer a gestao cadastro e eliminacao de usuarios  --}}
@extends('layouts.app')

@section('content')
{{-- criar um formulario em cima e logo abaixo a view com os dados fazer normal usando os recursos do laravel sem criar uma view --}}

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card w-container ">
            <div class="card-header">
                <h5>Controle dos Usuarios e nível de acesso.</h5>
            </div>

            <div class="card-body text-light bg-dark">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                {{-- Voce esta logado --}}

                <div class="container w-container text-light bg-dark">
                    <!-- Aqui vamos adicionar o conteúdo que a gente fez de cadastro e que Deus ajude! -->


                    <form class="w-form" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputName">Selecione o usuario</label>
                                <select name="inputName" id="inputName" class="form-control">
                                    <option selected>Selecione um nome...</option>
                                    {{-- <option>...</option> --}}
                                    @foreach ($colaboradores as $colaborador)
                                    <option value="{{$colaborador->id}}">{{$colaborador->name}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <button type="submit" class="btn btn-secondary mt-4">Buscar
                                    colaboradores</button>
                            </div>

                        </div>
                    </form>



                    <form class="w-form" method="POST" action="/gestao/{{$usuarios[0]->id}}">
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputName">Usuário</label>
                                <select name="inputName" id="inputName" class="form-control" disabled="true">
                                    @foreach ($usuarios as $usuario)
                                    <option value="{{$usuario->id}}">{{$usuario->name}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" id="inputEmail" name="inputEmail"
                                    placeholder="Email" value="{{$usuarios[0]->email}}">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputNivel">Nivel</label>
                                <select name="inputNivel" id="inputNivel" class="form-control">
                                    <option selected>nivel</option>
                                    {{-- <option>...</option> --}}

                                    <option value="0">Usuario</option>
                                    <option value="1">Admin</option>
                                    <option value="3">Super Admin</option>
                                    <option value="7">Bloqueado</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning">Alterar cadastro</button>

                    </form>

                    <div class="w-form-done">
                        <div>Cadastro ok</div>
                    </div>
                    <div class="w-form-fail">
                        <div>Oops! Ocorroreu algum erro.</div>
                    </div>
                    @if(@isset($usuarios) && count($usuarios) > 0)
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <td>
                                    <h5 class="field-label-6">Usuarios</h5>
                                </td>
                                <td>
                                    <h5 class="field-label-6">Email registrado</h5>
                                </td>
                                <td>
                                    <h5 class="field-label-6">Nível acesso</h5>
                                </td>
                                <td>
                                    <h5 class="field-label-6">Ações</h5>
                                </td>
                            </tr>
                        </thead>
                        @foreach ($usuarios as $usuario)
                        <tr>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->email}}</td>
                            <td>
                                @if ($usuario->adm == 3)
                                Super Admin
                                @elseif ($usuario->adm == 1)
                                Admin
                                @elseif ($usuario->adm == 7)
                                Bloqueado
                                @else
                                Usuário
                                @endif
                            </td>
                            <td><a href="#" class="btn btn-danger">
                                    bloquear</a></td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                    <h5 class="alert alert-info">Sem dados cadastrados</h5>
                    @endif

                </div>

            </div>
        </div>
    </div>
</div>





{{-- Fim do conteudo --}}
@endsection
