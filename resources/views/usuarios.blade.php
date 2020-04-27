{{-- Essa view é somente para fazer a gestao cadastro e eliminacao de usuarios  --}}
@extends('layouts.app')

@section('content')
{{-- criar um formulario em cima e logo abaixo a view com os dados fazer normal usando os recursos do laravel sem criar uma view --}}

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card w-container">
            <div class="card-header">Controle dos colaboradores</div>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                {{-- Voce esta logado --}}

                <div class="container w-container">
                    <!-- Aqui vamos adicionar o conteúdo que a gente fez de cadastro e que Deus ajude! -->

                    <form class="w-form" method="POST" action="/user/cad">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputName">Nome colaborador</label>
                                <select name="inputName" id="inputName" class="form-control">
                                    <option selected>Selecione um nome...</option>
                                    {{-- <option>...</option> --}}
                                    @foreach ($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputMatricula">Matricula</label>
                                <input type="number" class="form-control" id="inputMatricula" name="inputMatricula"
                                    placeholder="Matricula">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAdmissao">Admissão</label>
                                <input type="date" class="form-control" id="inputAdmissao" name="inputAdmissao"
                                    placeholder="Data de Admissão">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="inputTelefone">Telefone</label>
                                <input type="tel" class="form-control" id="inputTelefone" name="inputTelefone"
                                    placeholder="Informe o telefone">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputCelular">Celular</label>
                                <input type="tel" class="form-control" id="inputCelular" name="inputCelular"
                                    placeholder="Informe o celular">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" id="inputEmail" name="inputEmail"
                                    placeholder="Email">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputTribo">Tribo</label>
                                <select id="inputTribo" name="inputTribo" class="form-control">
                                    <option selected>Escolher...</option>
                                    @foreach ($tribos as $tribo)
                                    <option value="{{$tribo->id}}">{{$tribo->tribonome}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputSquad">Squad</label>
                                <select id="inputSquad" name="inputSquad" class="form-control">
                                    <option selected>Escolher...</option>
                                    @foreach ($squads as $squad)
                                    <option value="{{$squad->id}}">{{$squad->squad}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCargo">Cargo</label>
                                <select id="inputCargo" name="inputCargo" class="form-control">
                                    <option selected>Escolher...</option>
                                    @foreach ($cargos as $cargo)
                                    <option value="{{$cargo->id}}">{{$cargo->cargo}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputEmpresa">Empresa</label>
                                <select id="inputEmpresa" name="inputEmpresa" class="form-control">
                                    <option selected>Escolher...</option>
                                    @foreach ($empresas as $empresa)
                                    <option value="{{$empresa->id}}">{{$empresa->empresa}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputEstabelecimento">Estabelecimento</label>
                                <select id="inputEstabelecimento" name="inputEstabelecimento" class="form-control">
                                    <option selected>Escolher...</option>
                                    @foreach ($estabelecimentos as $estabelecimento)
                                    <option value="{{$estabelecimento->id}}">{{$estabelecimento->desc_estabelecimento}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCentroCusto">Centro de custo</label>
                                <select id="inputCentroCusto" name="inputCentroCusto" class="form-control">
                                    <option selected>Escolher...</option>
                                    @foreach ($centrocustos as $centrocusto)
                                    <option value="{{$centrocusto->id}}">{{$centrocusto->centrocusto}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- <div class="form-group">
                            <label for="inputAddress">Endereço</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Rua dos Bobos, nº 0">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Endereço 2</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, hotel, casa, etc.">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Cidade</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputEstado">Estado</label>
                                <select id="inputEstado" class="form-control">
                                    <option selected>Escolher...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputCEP">CEP</label>
                                <input type="text" class="form-control" id="inputCEP">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Clique em mim
                                </label>
                            </div>
                        </div> --}}

                        <button type="submit" class="btn btn-primary">Finalizar cadastro</button>
                    </form>

                    <div class="w-form-done">
                        <div>Cadastro ok</div>
                    </div>
                    <div class="w-form-fail">
                        <div>Oops! Ocorroreu algum erro.</div>
                    </div>
                    @if(@isset($colaboradores) && count($colaboradores) > 0)
                    <table class="table">
                        <thead>
                            <tr>
                                <td>
                                    <h5 class="field-label-6">Colaborador</h5>
                                </td>
                                <td>
                                    <h5 class="field-label-6">Matricula</h5>
                                </td>
                                <td>
                                    <h5 class="field-label-6">Tribo</h5>
                                </td>
                                <td>
                                    <h5 class="field-label-6">Squad</h5>
                                </td>
                                <td>
                                    <h5 class="field-label-6">Ações</h5>
                                </td>
                            </tr>
                        </thead>
                        @foreach ($colaboradores as $colaboradore)
                        <tr>
                            <td>{{$colaboradore->user->name}}</td>
                            <td>{{$colaboradore->macricula}}</td>
                            <td>{{$colaboradore->tribo->tribonome}}</td>
                            <td>{{$colaboradore->squad->squad}}</td>
                            <td><a href="#" class="btn btn-danger">excluir</a></td>
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
