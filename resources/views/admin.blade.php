@extends('layouts.app')

@section('content')


<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card w-container">
            <div class="card-header">
                <h5>Gerenciamento Empresarial</h5>
            </div>

            <div class="card-body bg-dark text-light">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                <div class="container w-container">
                    {{-- <div class="text-block">Gerenciamento Empresarial</div> --}}
                    <div data-duration-in="300" data-duration-out="100" class="w-tabs">
                        <div class="w-tab-menu" role="tablist"><a data-w-tab="Cargos"
                                class="w-inline-block w-tab-link mt-1 w--current" id="w-tabs-0-data-w-tab-0"
                                href="#w-tabs-0-data-w-pane-0" role="tab" aria-controls="w-tabs-0-data-w-pane-0"
                                aria-selected="true">
                                <div>Cargos</div>
                            </a><a data-w-tab="Tribos" class="w-inline-block w-tab-link mt-1" tabindex="1"
                                id="w-tabs-0-data-w-tab-1" href="#w-tabs-0-data-w-pane-1" role="tab"
                                aria-controls="w-tabs-0-data-w-pane-1" aria-selected="false">
                                <div>Tribos</div>
                            </a><a data-w-tab="Squad" class="w-inline-block w-tab-link mt-1" tabindex="2"
                                id="w-tabs-0-data-w-tab-2" href="#w-tabs-0-data-w-pane-2" role="tab"
                                aria-controls="w-tabs-0-data-w-pane-2" aria-selected="false">
                                <div>Squad</div>
                            </a><a data-w-tab="Centro de Custo" class="w-inline-block w-tab-link mt-1" tabindex="3"
                                id="w-tabs-0-data-w-tab-3" href="#w-tabs-0-data-w-pane-3" role="tab"
                                aria-controls="w-tabs-0-data-w-pane-3" aria-selected="false">
                                <div>Centro de Custo</div>
                            </a><a data-w-tab="Estabelecimento" class="w-inline-block w-tab-link mt-1" tabindex="4"
                                id="w-tabs-0-data-w-tab-4" href="#w-tabs-0-data-w-pane-4" role="tab"
                                aria-controls="w-tabs-0-data-w-pane-4" aria-selected="false">
                                <div>Estabelecimento</div>
                            </a><a data-w-tab="Empresa" class="w-inline-block w-tab-link mt-1" tabindex="5"
                                id="w-tabs-0-data-w-tab-5" href="#w-tabs-0-data-w-pane-5" role="tab"
                                aria-controls="w-tabs-0-data-w-pane-5" aria-selected="false">
                                <div>Empresa</div>
                            </a>
                            <!-- Usar a mesma regra de if para mostrar apenas se este for o admin -->
                            @if ($adms[0]->adm == 3)

                            <a data-w-tab="Admin" class="w-inline-block w-tab-link mt-1" tabindex="6"
                                id="w-tabs-0-data-w-tab-6" href="#w-tabs-0-data-w-pane-6" role="tab"
                                aria-controls="w-tabs-0-data-w-pane-6" aria-selected="false">
                                <div>Admin</div>
                            </a>

                            @endif


                            <!-- Ajuste Deste ponto em diante é feito os menus e inputs de iteracao com o usuario -->
                        </div>
                        <div class="w-tab-content">
                            <div data-w-tab="Cargos" class="w-tab-pane w--tab-active" id="w-tabs-0-data-w-pane-0"
                                role="tabpanel" aria-labelledby="w-tabs-0-data-w-tab-0">
                                <div class="w-form">
                                    <form method="post" action="/cargo/cad" id="wf-form-squad">
                                        @csrf
                                        <label for="name_cargo" class="field-label mt-4">Cadastro de Cargos</label>
                                        <input type="text" class="w-input" maxlength="256" name="name_cargo"
                                            data-name="Name" placeholder="" id="name_cargo" required>
                                        <input type="submit" value="Incluir" data-wait="Por favor aguarde..."
                                            class="w-button mt-2 my-2"></form>

                                    <div class="w-form-done">
                                        <div>Cadastro ok</div>
                                    </div>
                                    <div class="w-form-fail">
                                        <div>Oops! Ocorroreu algum erro.</div>
                                    </div>
                                    <!-- Inicio do looping com laravel -->
                                    {{-- <h1>Titulo dos Cargos</h1> --}}
                                    {{-- <ul>
                                                    @forelse ($cargos as $cargo)
                                                        <li> {{$cargo->cargo}} </li>

                                    @empty
                                    <li> Não exitem Cargos cadastrados! </li>
                                    @endforelse

                                    </ul> --}}
                                    @if(isset($cargos) && count($cargos) > 0)
                                    <table class="table table-striped table-dark">
                                        <thead>
                                            <tr>
                                                <td>
                                                    <h5 class="field-label-6">Nome do Cargo</h5>
                                                </td>
                                                <td>
                                                    <h5 class="field-label-6">Ações</h5>
                                                </td>
                                            </tr>
                                        </thead>
                                        @foreach ($cargos as $cargo)
                                        <tr>
                                            <td>{{$cargo->cargo}}</td>
                                            <td><a href="/cargo/del/{{ $cargo->id }}" class="btn btn-danger">excluir</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                    @else
                                    <h5 class="alert alert-info">Sem dados cadastrados</h5>
                                    <!-- Fim do looping -->
                                    @endif
                                </div>
                            </div>

                            <div data-w-tab="Tribos" class="w-tab-pane" id="w-tabs-0-data-w-pane-1" role="tabpanel"
                                aria-labelledby="w-tabs-0-data-w-tab-1">
                                <div class="w-form">
                                    <form id="wf-form" method="post" action="/tribo/cad">
                                        @csrf
                                        <label for="name_tribo" class="field-label-2 mt-4">Cadastro de
                                            Tribos</label>
                                        <input type="text" class="w-input" maxlength="256" name="name_tribo"
                                            data-name="Name 2" placeholder="" id="name_tribo" required>
                                        <input type="submit" value="Incluir" data-wait="Por favor aguarde..."
                                            class="w-button mt-2 my-2"></form>
                                    <div class="w-form-done">
                                        <div>Cadastro ok</div>
                                    </div>
                                    <div class="w-form-fail">
                                        <div>Oops! Ocorroreu algum erro.</div>
                                    </div>
                                    @if(@isset($tribos)&& count($tribos) > 0)
                                    <table class="table table-striped table-dark">
                                        <thead>
                                            <tr>
                                                <td>
                                                    <h5 class="field-label-6">Nome da tribo</h5>
                                                </td>
                                                <td>
                                                    <h5 class="field-label-6">Ações</h5>
                                                </td>
                                            </tr>
                                        </thead>
                                        @foreach ($tribos as $tribo)
                                        <tr>
                                            <td>{{$tribo->tribonome}}</td>
                                            <td><a href="/tribo/del/{{ $tribo->id }}" class="btn btn-danger">excluir</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                    @else
                                    <h5 class="alert alert-info">Sem dados cadastrados</h5>
                                    @endif

                                    {{-- <h1>Titulo das Tribos</h1>
                                        <ul>
                                            @forelse ($tribos as $tribo)
                                            <li> {{$tribo->tribonome}} </li>
                                    @empty
                                    <li> Não exitem Tribos cadastradas! </li>
                                    @endforelse
                                    </ul> --}}

                                </div>
                            </div>
                            <div data-w-tab="Squad" class="w-tab-pane" id="w-tabs-0-data-w-pane-2" role="tabpanel"
                                aria-labelledby="w-tabs-0-data-w-tab-2">
                                <div class="w-form">
                                    <form id="wf-form" method="POST" action="/squad/cad">
                                        @csrf
                                        <label for="name_squad" class="field-label-3 mt-4">Cadastro de
                                            Squad
                                        </label>
                                        <input type="text" class="w-input" maxlength="256" name="name_squad"
                                            data-name="Name 2" placeholder="" id="name_squad" required>
                                        <input type="submit" value="Incluir" data-wait="Por favor aguarde..."
                                            class="w-button mt-2 my-2">
                                    </form>
                                    <div class="w-form-done">
                                        <div>Cadastro ok</div>
                                    </div>
                                    <div class="w-form-fail">
                                        <div>Oops! Ocorroreu algum erro.</div>
                                    </div>
                                    @if(@isset($squads)&& count($squads) > 0)
                                    <table class="table table-striped table-dark">
                                        <thead>
                                            <tr>
                                                <td>
                                                    <h5 class="field-label-6">Nome da Squad</h5>
                                                </td>
                                                <td>
                                                    <h5 class="field-label-6">Ações</h5>
                                                </td>
                                            </tr>
                                        </thead>
                                        @foreach ($squads as $squad)
                                        <tr>
                                            <td>{{$squad->squad}}</td>
                                            <td><a href="/squad/del/{{ $squad->id }}" class="btn btn-danger">excluir</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                    @else
                                    <h5 class="alert alert-info">Sem dados cadastrados</h5>
                                    @endif
                                </div>
                            </div>
                            <div data-w-tab="Centro de Custo" class="w-tab-pane" id="w-tabs-0-data-w-pane-3"
                                role="tabpanel" aria-labelledby="w-tabs-0-data-w-tab-3">
                                <div class="w-form">
                                    <form id="wf-form" method="POST" action="/centocusto/cad">
                                        @csrf
                                        <label for="name_centroCusto" class="field-label-4 mt-4">Cadastro do centro
                                            de
                                            custo
                                        </label>
                                        <input type="text" class="w-input" maxlength="256" name="name_centroCusto"
                                            data-name="Name 2" placeholder="" id="name_centroCusto" required>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Descrição: </span>
                                            </div>
                                            <textarea name="name_descentroCusto" maxlength="300" class="form-control"
                                                aria-label="Com textarea" required></textarea>
                                        </div>

                                        <input type="submit" value="Incluir" data-wait="Por favor aguarde..."
                                            class="w-button mt-2 my-2">
                                    </form>
                                    <div class="w-form-done">
                                        <div>Cadastro ok</div>
                                    </div>
                                    <div class="w-form-fail">
                                        <div>Oops! Ocorroreu algum erro.</div>
                                    </div>
                                    @if(@isset($centrocustos)&& count($centrocustos) > 0)
                                    <table class="table table-striped table-dark">
                                        <thead>
                                            <tr>
                                                <td>
                                                    <h5 class="field-label-6">Centro de custo</h5>
                                                </td>
                                                <td>
                                                    <h5 class="field-label-6">Descrição</h5>
                                                </td>
                                                <td>
                                                    <h5 class="field-label-6">Ações</h5>
                                                </td>
                                            </tr>
                                        </thead>
                                        @foreach ($centrocustos as $centrocusto)
                                        <tr>
                                            <td>{{$centrocusto->centrocusto}}</td>
                                            <td>{{$centrocusto->descentrocusto}}</td>
                                            <td><a href="/centocusto/del/{{ $centrocusto->id }}"
                                                    class="btn btn-danger">excluir</a></td>
                                        </tr>
                                        @endforeach
                                    </table>
                                    @else
                                    <h5 class="alert alert-info">Sem dados cadastrados</h5>
                                    @endif
                                </div>
                            </div>
                            <div data-w-tab="Estabelecimento" class="w-tab-pane" id="w-tabs-0-data-w-pane-4"
                                role="tabpanel" aria-labelledby="w-tabs-0-data-w-tab-4">
                                <div class="w-form">
                                    <form id="wf-form" method="POST" action="/estabelecimento/cad">
                                        @csrf
                                        <label for="name_estabelecimento" class="field-label-5 mt-4">Cadastro de
                                            estabelecimento
                                        </label>
                                        <input type="text" class="w-input" maxlength="256" name="name_estabelecimento"
                                            data-name="Name 2" placeholder="" id="name_estabelecimento" required>
                                        <input type="submit" value="Incluir" data-wait="Por favor aguarde..."
                                            class="w-button mt-2 my-2">
                                    </form>
                                    <div class="w-form-done">
                                        <div>Cadastro ok</div>
                                    </div>
                                    <div class="w-form-fail">
                                        <div>Oops! Ocorroreu algum erro.</div>
                                    </div>
                                    @if(@isset($estabelecimentos) && count($estabelecimentos) > 0)
                                    <table class="table table-striped table-dark">
                                        <thead>
                                            <tr>
                                                <td>
                                                    <h5 class="field-label-6">Estabelecimento</h5>
                                                </td>
                                                <td>
                                                    <h5 class="field-label-6">Ações</h5>
                                                </td>
                                            </tr>
                                        </thead>
                                        @foreach ($estabelecimentos as $estabelecimento)
                                        <tr>
                                            <td>{{$estabelecimento->desc_estabelecimento}}</td>
                                            <td><a href="/estabelecimento/del/{{ $estabelecimento->id }}"
                                                    class="btn btn-danger">excluir</a></td>
                                        </tr>
                                        @endforeach
                                    </table>
                                    @else
                                    <h5 class="alert alert-info">Sem dados cadastrados</h5>
                                    @endif
                                </div>
                            </div>
                            <div data-w-tab="Empresa" class="w-tab-pane" id="w-tabs-0-data-w-pane-5" role="tabpanel"
                                aria-labelledby="w-tabs-0-data-w-tab-5">
                                <div class="w-form">
                                    <form id="wf-form-squad" method="post" action="/empresa/cad">
                                        @csrf
                                        <label for="name_empresa" class="field-label-6 mt-4">Cadastro
                                            Empresas
                                        </label>
                                        <input type="text" class="w-input" maxlength="256" name="name_empresa"
                                            data-name="Name 2" placeholder="" id="name_empresa" required>
                                        <input type="submit" value="Incluir" data-wait="Por favor aguarde..."
                                            class="w-button mt-2 my-2">
                                    </form>
                                    <div class="w-form-done">
                                        <div>Cadastro ok</div>
                                    </div>
                                    <div class="w-form-fail">
                                        <div>Oops! Ocorroreu algum erro.</div>
                                    </div>
                                    @if(@isset($empresas) && count($empresas) > 0)
                                    <table class="table table-striped table-dark">
                                        <thead>
                                            <tr>
                                                <td>
                                                    <h5 class="field-label-6">Empresas</h5>
                                                </td>
                                                <td>
                                                    <h5 class="field-label-6">Ações</h5>
                                                </td>
                                            </tr>
                                        </thead>
                                        @foreach ($empresas as $empresa)
                                        <tr>
                                            <td>{{$empresa->empresa}}</td>
                                            <td><a href="/empresa/del/{{ $empresa->id }}"
                                                    class="btn btn-danger">excluir</a></td>
                                        </tr>
                                        @endforeach
                                    </table>
                                    @else
                                    <h5 class="alert alert-info">Sem dados cadastrados</h5>
                                    @endif
                                </div>
                            </div>

                            {{-- somente admin master --}}

                            <div data-w-tab="Admin" class="w-tab-pane" id="w-tabs-0-data-w-pane-6" role="tabpanel"
                                aria-labelledby="w-tabs-0-data-w-tab-6">
                                <div class="w-form">


                                    <h5 class="my-2">Gestão de usuários | Administração da Ferramenta</h5>
                                    <a href="/gestao" class="btn btn-secondary mt-4">Abrir a pagina de Edição de
                                        usuarios</a>
                                    @csrf






                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @endsection
