@extends('layouts.app')

@section('content')
{{-- Inserir o conteudo aqui --}}

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card w-container">
            <div class="card-header">
                <h5>Controle de plantão</h5>
            </div>

            <div class="card-body bg-dark">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                {{-- Voce esta logado --}}

                <div class="container w-container bg-dark text-light">
                    <!-- Aqui vamos adicionar o conteúdo que a gente fez de cadastro e que Deus ajude! -->

                    <form class="w-form" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputName">Selecione a Squad</label>
                                <select name="inputName" id="inputName" class="form-control">
                                    <option selected>Selecione um nome...</option>
                                    {{-- <option>...</option> --}}
                                    @foreach ($squads as $squad)
                                    <option value="{{$squad->id}}">{{$squad->squad}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <button type="submit" class="btn btn-secondary mt-4">Buscar
                                    colaboradores</button>
                            </div>

                        </div>
                    </form>
                    {{-- Divisao de formularios para executar busca e cadastro de plantao  --}}
                    <form class="w-form" method="POST" action="/insert">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputTribo">Colaborador</label>
                                <select id="inputColaborador" name="inputColaborador" class="form-control">
                                    <option selected>Escolher...</option>
                                    @foreach ($colaboradores as $colaborador)
                                    <option value="{{$colaborador->id}}">{{$colaborador->user->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputEmail">Inicio plantão</label>
                                <input type="datetime-local" class="form-control" id="inputIncioP" name="inputIncioP"
                                    placeholder="Data e Hora do inicio">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputEmail">Termino Plantão</label>
                                <input type="datetime-local" class="form-control" id="inputFimP" name="inputFimP"
                                    placeholder="Data e Hora do fim">
                            </div>
                        </div>

                        <div class="form-group">
                            {{-- <div class="form-group col-md-4"> --}}
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Observação: </span>
                                </div>
                                <textarea name="name_observacao" maxlength="300" class="form-control"
                                    aria-label="Com textarea" required></textarea>
                            </div>


                        </div>



                        <button type="submit" class="btn btn-primary">Salvar plantão</button>
                    </form>

                    <div class="w-form-done">
                        <div>Cadastro ok</div>
                    </div>
                    <div class="w-form-fail">
                        <div>Oops! Ocorroreu algum erro.</div>
                    </div>
                    @if(@isset($plantoes) && count($plantoes) > 0)
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <td>
                                    <h5 class="field-label-6">Colaborador</h5>
                                </td>
                                {{-- <td>
                                    <h5 class="field-label-6">Squad</h5>
                                </td> --}}
                                <td>
                                    <h5 class="field-label-6">Inicio plantão</h5>
                                </td>
                                <td>
                                    <h5 class="field-label-6">Termino plantão</h5>
                                </td>
                                <td>
                                    @if ( Auth::user()->adm == 1 || Auth::user()->adm == 3 )
                                    <h5 class="field-label-6">Ações</h5>
                                    @else
                                    {{-- Nenhuma opcao apresentada --}}
                                    @endif
                                </td>
                            </tr>
                        </thead>
                        @foreach ($plantoes as $plantao)
                        <tr>
                            {{-- <td>{{$plantao->colaborador->user->name}}</td>
                            <td>{{$plantao->colaborador->squad->squad}}</td>
                            <td>{{$plantao->datainicio}}</td>
                            <td>{{$plantao->datafim}}</td> --}}
                            <td>{{$plantao->name}}</td>
                            {{-- <td>{{$plantao->squad}}</td> --}}
                            <td>{{$plantao->datainicio}}</td>
                            <td>{{$plantao->datafim}}</td>
                            {{-- <td>{{$plantao->squad->squad}}</td> --}}
                            <td>
                                @if ( Auth::user()->adm == 1 || Auth::user()->adm == 3 )
                                <a href="/delete/plantao/{{$plantao->id}}" class="btn btn-danger">excluir</a>
                                @else
                                {{-- Nenhuma opcao apresentada --}}
                                @endif

                            </td>
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



@endsection
