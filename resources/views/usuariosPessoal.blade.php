{{-- Essa view é somente para fazer a gestao cadastro e eliminacao de usuarios  --}}
@extends('layouts.app')

@section('content')
{{-- criar um formulario em cima e logo abaixo a view com os dados fazer normal usando os recursos do laravel sem criar uma view --}}

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card w-container">
            <div class="card-header">Controle do colaborador</div>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                {{-- Voce esta logado --}}

                <div class="container w-container">
                    <!-- Aqui vamos adicionar o conteúdo que a gente fez de cadastro e que Deus ajude! -->

                    <!-- Usar um if para alternar o mesmo form e botao com caracteristicas diferentes -->
                    @if (@isset($colaboradores) && count($colaboradores) > 0)
                        <!-- Neste bloco realizar a chamada para update o else sera o padrao para cadastro inicial pelo usuario  -->
                        @foreach ($colaboradores as $colaboradore)
                            <form method="POST" action="/usuario/{{$colaboradore->id}}">
                        @endforeach
                        @method('put')
                        {{-- @csrf --}}
                        @else
                        <!-- Cadastro default -->
                        <form class="w-form" method="POST" action="/user/cad">
                    @endif
                    @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputName">Nome colaborador</label>
                                <select name="inputName" id="inputName" class="form-control">
                                    {{-- <option selected>Selecione um nome...</option> --}}
                                    {{-- <option>...</option> --}}
                                    {{-- @foreach (Auth::user() as $user) --}}
                                    <option value="{{ Auth::user()->id }}">{{ Auth::user()->name }} - id:
                                        {{ Auth::user()->id }}</option>
                                    {{-- @endforeach --}}

                                </select>
                            </div>
                            <div class="form-group col-md-2">

                                <label for="inputMatricula">Matricula</label>
                                @if(@isset($colaboradores) && count($colaboradores) > 0)
                                @foreach ($colaboradores as $colaboradore)
                                <input type="number" class="form-control" id="inputMatricula" name="inputMatricula"
                                    placeholder="Matricula" value="{{$colaboradore->macricula}}">
                                @endforeach
                                @else
                                <input type="number" class="form-control" id="inputMatricula" name="inputMatricula"
                                    placeholder="Matricula">
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAdmissao">Admissão</label>
                                @if(@isset($colaboradores) && count($colaboradores) > 0)
                                @foreach ($colaboradores as $colaboradore)
                                <input type="date" class="form-control" id="inputAdmissao" name="inputAdmissao"
                                    placeholder="Data de Admissão" value="{{$colaboradore->data_adm}}">
                                @endforeach
                                @else
                                <input type="date" class="form-control" id="inputAdmissao" name="inputAdmissao"
                                    placeholder="Data de Admissão">
                                @endif
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="inputTelefone">Telefone</label>
                                @if(@isset($colaboradores) && count($colaboradores) > 0)
                                @foreach ($colaboradores as $colaboradore)
                                <input type="tel" class="form-control" id="inputTelefone" name="inputTelefone"
                                    placeholder="Informe o telefone" value="{{$colaboradore->telefone}}">
                                @endforeach
                                @else
                                <input type="tel" class="form-control" id="inputTelefone" name="inputTelefone"
                                    placeholder="Informe o telefone">
                                @endif
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputCelular">Celular</label>
                                @if(@isset($colaboradores) && count($colaboradores) > 0)
                                @foreach ($colaboradores as $colaboradore)
                                <input type="tel" class="form-control" id="inputCelular" name="inputCelular"
                                    placeholder="Informe o celular" value="{{$colaboradore->celular}}">
                                @endforeach
                                @else
                                <input type="tel" class="form-control" id="inputCelular" name="inputCelular"
                                    placeholder="Informe o celular">
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail">Email particular</label>
                                @if(@isset($colaboradores) && count($colaboradores) > 0)
                                @foreach ($colaboradores as $colaboradore)
                                <input type="email" class="form-control" id="inputEmail" name="inputEmail"
                                    placeholder="Email" value="{{$colaboradore->email_parti}}">
                                @endforeach
                                @else
                                <input type="email" class="form-control" id="inputEmail" name="inputEmail"
                                    placeholder="Email">
                                @endif
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


                        <button type="submit" class="btn btn-primary">Finalizar cadastro</button>
                    </form>


                       {{-- <button type="submit" class="btn btn-primary">Realizar atualização NOP</button> -}}


                    <div class="w-form-done">
                        <div>Cadastro ok</div>
                    </div>
                    <div class="w-form-fail">
                        <div>Oops! Ocorroreu algum erro.</div>
                    </div>

                    {{-- @if(@isset($colaboradores) && count($colaboradores) > 0)
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
                    @endif --}}

                </div>

            </div>
        </div>
    </div>
</div>





{{-- Fim do conteudo --}}
@endsection
