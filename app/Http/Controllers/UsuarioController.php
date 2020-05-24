<?php

namespace App\Http\Controllers;

use App\ColaboradorModel;
use App\TriboModel;
use App\User;
use App\SquadModel;
use App\CargosModel;
use App\EmpresaModel;
use App\EstabelecimentoModel;
use App\CentrocustoModel;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
    public function lista()
    {

        $colaboradores = ColaboradorModel::paginate(10);
        $tribos = TriboModel::all();
        $users = User::all();
        $squads = SquadModel::all();
        $cargos = CargosModel::all();
        $empresas = EmpresaModel::all();
        $estabelecimentos = EstabelecimentoModel::all();
        $centrocustos = CentrocustoModel::all();

        return view('usuarios', compact('colaboradores', 'tribos', 'users', 'squads', 'cargos', 'empresas', 'estabelecimentos', 'centrocustos'));
    }

    public function create(Request $request)
    {

        if ($request->isMethod('GET')) {
            return view('usuarios');
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

        $newColaborador->save();
        return redirect('/usuarios');
    }

    public function delete($id)
    {
        $deleteColaborador = ColaboradorModel::find($id);
        $deleteColaborador->delete();
        return redirect('/usuarios');
    }
}
