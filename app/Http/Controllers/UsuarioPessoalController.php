<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\ColaboradorModel;
use App\TriboModel;
use App\User;
use App\SquadModel;
use App\CargosModel;
use App\EmpresaModel;
use App\EstabelecimentoModel;
use App\CentrocustoModel;

class UsuarioPessoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dessa forma recupera o ID autenticado do middeware de autenticacao
        $id = Auth::id();
        // Para filtrar um unico campo deve colocar o mesmo no get
        $value_tribo = ColaboradorModel::where('users_id', '=', $id)->get('tribo_id');
        $value_squad = ColaboradorModel::where('users_id', '=', $id)->get('squad_id');
        $value_cargo = ColaboradorModel::where('users_id', '=', $id)->get('cargos_id');
        $value_empresas = ColaboradorModel::where('users_id', '=', $id)->get('empresa_id');
        $value_estabelecimentos = ColaboradorModel::where('users_id', '=', $id)->get('estabelecimento_id');
        $value_centrocustos = ColaboradorModel::where('users_id', '=', $id)->get('centrocusto_id');
        //
        $colaboradores = ColaboradorModel::where('users_id', '=', $id)->paginate(1);

        // Criar regra para verificar se o usuario já esta com seu perfil devidamente cadastrado e attu
        // caso seja primeiro acesso será necessario cadastrar
        // se já for cadastrado somente tribo e squad podem ser alteradas
        // tribo e squad são carregadas independentemente.
        $tribos = TriboModel::all();
        $squads = SquadModel::all();
        if (count($value_tribo) == 0 || count($value_squad) == 0 || count($value_cargo) == 0 || count($value_empresas) == 0 || count($value_estabelecimentos) == 0 || count($value_centrocustos) == 0) {

            $cargos = CargosModel::all();
            $empresas = EmpresaModel::all();
            $estabelecimentos = EstabelecimentoModel::all();
            $centrocustos = CentrocustoModel::all();
        } else {
            //$tribos = TriboModel::find($value_tribo);
            //$squads = SquadModel::find($value_squad);
            $cargos = CargosModel::find($value_cargo);
            $empresas = EmpresaModel::find($value_empresas);
            $estabelecimentos = EstabelecimentoModel::find($value_estabelecimentos);
            $centrocustos = CentrocustoModel::find($value_centrocustos);
        }
        return view('usuariosPessoal', compact('colaboradores', 'tribos', 'squads', 'cargos', 'empresas', 'estabelecimentos', 'centrocustos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        if ($request->isMethod('GET')) {
            return view('usuariosPessoal');
        }

        $newColaborador = new ColaboradorModel();
        $newColaborador->macricula = $request->inputMatricula;
        $newColaborador->data_adm = $request->inputAdmissao;
        $newColaborador->telefone = $request->inputTelefone;
        $newColaborador->celular = $request->inputCelular;
        $newColaborador->email_parti = $request->inputEmail;
        $newColaborador->empresa_id = $request->inputEmpresa;
        $newColaborador->estabelecimento_id = $request->inputEstabelecimento;
        $newColaborador->centrocusto_id = $request->inputCentroCusto;
        $newColaborador->cargos_id = $request->inputCargo;
        $newColaborador->squad_id = $request->inputSquad;
        $newColaborador->tribo_id = $request->inputTribo;
        $newColaborador->users_id = $request->inputName;
        //$newColaborador->users_id = Auth::user()->id;

        $newColaborador->save();
        return redirect('/usuario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Aqui estou forcando o uso do middeware auth
        //$id = Auth::id();
        // Aqui e recuperado o id do usuario sem a necessidade de interacao do usuario (desnecessario)
        //$value_colaborador = ColaboradorModel::where('users_id', '=', $id)->get('id');
        // Passando o valor recuperado
        //$updateColaborador = ColaboradorModel::find($value_colaborador);
        $updateColaborador = ColaboradorModel::find($id);

        $updateColaborador->macricula = $request->inputMatricula;
        $updateColaborador->data_adm = $request->inputAdmissao;
        $updateColaborador->telefone = $request->inputTelefone;
        $updateColaborador->celular = $request->inputCelular;
        $updateColaborador->email_parti = $request->inputEmail;
        $updateColaborador->empresa_id = $request->inputEmpresa;
        $updateColaborador->estabelecimento_id = $request->inputEstabelecimento;
        $updateColaborador->centrocusto_id = $request->inputCentroCusto;
        $updateColaborador->cargos_id = $request->inputCargo;
        $updateColaborador->squad_id = $request->inputSquad;
        $updateColaborador->tribo_id = $request->inputTribo;
        $updateColaborador->users_id = $request->inputName;

        $updateColaborador->save();
        return redirect('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
