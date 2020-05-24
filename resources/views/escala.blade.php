@extends('layouts.app')

@section('content')
{{-- Inserir o conteudo aqui --}}

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="w-container text-light">
            <div class="col-12">
                <h3>Escala de plantão</h3>
            </div>

            <div class="">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                {{-- Voce esta logado --}}

                <div class="container w-container">

                    <form class="w-form" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
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
                    {{-- <a href="/estabelecimento/del/?inputName" class="btn btn-danger">excluir</a> --}}
                    {{-- Divisao de formularios para executar busca e cadastro de plantao  --}} <div
                        class="w-form-done">
                        <div>Cadastro ok</div>
                    </div>
                    <div class="w-form-fail">
                        <div>Oops! Ocorroreu algum erro.</div>
                    </div>
                    {{-- @if(@isset($plantoes) && count($plantoes) > 0) --}}
                    <div class="w-container">
                        <table class="table table-striped table-dark">
                            <thead>
                                <tr>
                                    <td>
                                        <h5 class="field-label-6">Colaborador</h5>
                                    </td>
                                    <td>
                                        <h5 class="field-label-6">Squad</h5>
                                    </td>
                                    <td>
                                        <h5 class="field-label-6">Inicio plantão</h5>
                                    </td>
                                    <td>
                                        <h5 class="field-label-6">Termino plantão</h5>
                                    </td>
                                    <td>
                                        <h5 class="field-label-6">Celular</h5>
                                    </td>
                                    <td>
                                        <h5 class="field-label-6">E-mail</h5>
                                    </td>
                                </tr>
                            </thead>
                            @foreach ($escalas as $escala)
                            <tr>
                                <td>{{$escala->name}}</td>
                                <td>{{$escala->squad}}</td>
                                <td>{{$escala->datainicio}}</td>
                                <td>{{$escala->datafim}}</td>
                                <td>{{$escala->celular}}</td>
                                <td>{{$escala->email}}</td>

                                {{-- <td>{{$plantao->squad->squad}}</td> --}}
                                {{-- <td><a href="/delete/plantao/{{$plantao->id}}" class="btn
                                btn-danger">excluir</a></td>
                                --}}

                            </tr>
                            {{-- <th scope="row">Celular</th> --}}
                            <td colspan="8">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Observação: </span>
                                    </div>
                                    <textarea name="name_observacao" readonly="true" maxlength="300"
                                        class="form-control" aria-label="Com textarea"
                                        required>{{$escala->obs}}</textarea>
                                </div>

                            </td>


                            @endforeach
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>



@endsection
