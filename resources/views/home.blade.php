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

                        You are logged in!
                        <!-- Aqui vamos adicionar o conteúdo que a gente fez de cadastro e que Deus ajude! -->

                            <div class="container w-container">
                                <div class="text-block">Gerenciamento Empresarial</div>
                                <div data-duration-in="300" data-duration-out="100" class="w-tabs">
                                    <div class="w-tab-menu" role="tablist"><a data-w-tab="Cargos" class="w-inline-block w-tab-link w--current"
                                                                              id="w-tabs-0-data-w-tab-0"
                                                                              href="#w-tabs-0-data-w-pane-0" role="tab"
                                                                              aria-controls="w-tabs-0-data-w-pane-0" aria-selected="true">
                                            <div>Cargos</div>
                                        </a><a data-w-tab="Tribos" class="w-inline-block w-tab-link" tabindex="-1" id="w-tabs-0-data-w-tab-1"
                                               href="#w-tabs-0-data-w-pane-1" role="tab"
                                               aria-controls="w-tabs-0-data-w-pane-1" aria-selected="false">
                                            <div>Tribos</div>
                                        </a><a data-w-tab="Squad" class="w-inline-block w-tab-link" tabindex="-1" id="w-tabs-0-data-w-tab-2"
                                               href="#w-tabs-0-data-w-pane-2" role="tab"
                                               aria-controls="w-tabs-0-data-w-pane-2" aria-selected="false">
                                            <div>Squad</div>
                                        </a><a data-w-tab="Centro de Custo" class="w-inline-block w-tab-link" tabindex="-1"
                                               id="w-tabs-0-data-w-tab-3"
                                               href="#w-tabs-0-data-w-pane-3" role="tab"
                                               aria-controls="w-tabs-0-data-w-pane-3" aria-selected="false">
                                            <div>Centro de Custo</div>
                                        </a><a data-w-tab="Estabelecimento" class="w-inline-block w-tab-link" tabindex="-1"
                                               id="w-tabs-0-data-w-tab-4"
                                               href="#w-tabs-0-data-w-pane-4" role="tab"
                                               aria-controls="w-tabs-0-data-w-pane-4" aria-selected="false">
                                            <div>Estabelecimento</div>
                                        </a><a data-w-tab="Empresa" class="w-inline-block w-tab-link" tabindex="-1" id="w-tabs-0-data-w-tab-5"
                                               href="#w-tabs-0-data-w-pane-5" role="tab"
                                               aria-controls="w-tabs-0-data-w-pane-5" aria-selected="false">
                                            <div>Empresa</div>
                                        </a></div>
                                    <div class="w-tab-content">
                                        <div data-w-tab="Cargos" class="w-tab-pane w--tab-active" id="w-tabs-0-data-w-pane-0" role="tabpanel"
                                             aria-labelledby="w-tabs-0-data-w-tab-0">
                                            <div class="w-form">
                                                <form id="wf-form-squad" name="wf-form-squad" data-name="squad"><label for="name"
                                                                                                                       class="field-label">EXEMPLO</label><input type="text" class="w-input" maxlength="256"
                                                                                                                                                                 name="name" data-name="Name" placeholder="" id="name"><input type="submit"
                                                                                                                                                                                                                              value="Submit" data-wait="Please wait..." class="w-button"></form>
                                                <div class="w-form-done">
                                                    <div>Thank you! Your submission has been received!</div>
                                                </div>
                                                <div class="w-form-fail">
                                                    <div>Oops! Something went wrong while submitting the form.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-w-tab="Tribos" class="w-tab-pane" id="w-tabs-0-data-w-pane-1" role="tabpanel"
                                             aria-labelledby="w-tabs-0-data-w-tab-1">
                                            <div class="w-form">
                                                <form id="wf-form-squad" name="wf-form-squad" data-name="squad"><label for="name-2"
                                                                                                                       class="field-label-2">Name</label><input type="text" class="w-input" maxlength="256"
                                                                                                                                                                name="name-2" data-name="Name 2" placeholder="" id="name-2"><input type="submit"
                                                                                                                                                                                                                                   value="Submit" data-wait="Please wait..." class="w-button"></form>
                                                <div class="w-form-done">
                                                    <div>Thank you! Your submission has been received!</div>
                                                </div>
                                                <div class="w-form-fail">
                                                    <div>Oops! Something went wrong while submitting the form.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-w-tab="Squad" class="w-tab-pane" id="w-tabs-0-data-w-pane-2" role="tabpanel"
                                             aria-labelledby="w-tabs-0-data-w-tab-2">
                                            <div class="w-form">
                                                <form id="wf-form-squad" name="wf-form-squad" data-name="squad"><label for="name-3"
                                                                                                                       class="field-label-3">Name</label><input type="text" class="w-input" maxlength="256"
                                                                                                                                                                name="name-2" data-name="Name 2" placeholder="" id="name-2"><input type="submit"
                                                                                                                                                                                                                                   value="Submit" data-wait="Please wait..." class="w-button"></form>
                                                <div class="w-form-done">
                                                    <div>Thank you! Your submission has been received!</div>
                                                </div>
                                                <div class="w-form-fail">
                                                    <div>Oops! Something went wrong while submitting the form.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-w-tab="Centro de Custo" class="w-tab-pane" id="w-tabs-0-data-w-pane-3" role="tabpanel"
                                             aria-labelledby="w-tabs-0-data-w-tab-3">
                                            <div class="w-form">
                                                <form id="wf-form-squad" name="wf-form-squad" data-name="squad"><label for="name-3"
                                                                                                                       class="field-label-4">Name</label><input type="text" class="w-input" maxlength="256"
                                                                                                                                                                name="name-2" data-name="Name 2" placeholder="" id="name-2"><input type="submit"
                                                                                                                                                                                                                                   value="Submit" data-wait="Please wait..." class="w-button"></form>
                                                <div class="w-form-done">
                                                    <div>Thank you! Your submission has been received!</div>
                                                </div>
                                                <div class="w-form-fail">
                                                    <div>Oops! Something went wrong while submitting the form.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-w-tab="Estabelecimento" class="w-tab-pane" id="w-tabs-0-data-w-pane-4" role="tabpanel"
                                             aria-labelledby="w-tabs-0-data-w-tab-4">
                                            <div class="w-form">
                                                <form id="wf-form-squad" name="wf-form-squad" data-name="squad"><label for="name-3"
                                                                                                                       class="field-label-5">Name</label><input type="text" class="w-input" maxlength="256"
                                                                                                                                                                name="name-2" data-name="Name 2" placeholder="" id="name-2"><input type="submit"
                                                                                                                                                                                                                                   value="Submit" data-wait="Please wait..." class="w-button"></form>
                                                <div class="w-form-done">
                                                    <div>Thank you! Your submission has been received!</div>
                                                </div>
                                                <div class="w-form-fail">
                                                    <div>Oops! Something went wrong while submitting the form.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-w-tab="Empresa" class="w-tab-pane" id="w-tabs-0-data-w-pane-5" role="tabpanel"
                                             aria-labelledby="w-tabs-0-data-w-tab-5">
                                            <div class="w-form">
                                                <form id="wf-form-squad" name="wf-form-squad" data-name="squad"><label for="name-3"
                                                                                                                       class="field-label-6">Name</label><input type="text" class="w-input" maxlength="256"
                                                                                                                                                                name="name-2" data-name="Name 2" placeholder="" id="name-2"><input type="submit"
                                                                                                                                                                                                                                   value="Submit" data-wait="Please wait..." class="w-button"></form>
                                                <div class="w-form-done">
                                                    <div>Thank you! Your submission has been received!</div>
                                                </div>
                                                <div class="w-form-fail">
                                                    <div>Oops! Something went wrong while submitting the form.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
