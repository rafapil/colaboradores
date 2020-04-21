<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CargosModel;
use App\TriboModel;
use App\CentrocustoModel;
// use App\ColaboradorModel; nao sera usado neste contexto
use App\EmpresaModel;
use App\EstabelecimentoModel;
// use App\PlantaoModel; nao sera tratado neste contexto
use App\SquadModel;

class AdminController extends Controller
{

    public function lista()
    {
        $cargos = CargosModel::all();
        $tribos = TriboModel::all();
        $centrocustos = CentrocustoModel::all();
        $empresas = EmpresaModel::all();
        $estabelecimentos = EstabelecimentoModel::all();
        $squads = SquadModel::all();

        return view('admin', compact('cargos', 'tribos', 'centrocustos', 'empresas', 'estabelecimentos', 'squads'));
    }

    public function cadastroCargo(Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('admin');
        }

        $newCargo = new CargosModel();
        $newCargo->cargo = $request->name_cargo;
        $newCargo->save();

        return redirect('/home/admin');
    }

    public function cadastroTribo(Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('admin');
        }

        $newTribo = new TriboModel();
        $newTribo->tribonome = $request->name_tribo;
        $newTribo->save();

        return redirect('/home/admin');
    }

    public function cadastroCentroCusto(Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('admin');
        }

        $newCentroCusto = new CentrocustoModel();
        $newCentroCusto->centrocusto = $request->name_centroCusto;
        $newCentroCusto->descentrocusto = $request->name_descentroCusto;
        $newCentroCusto->save();

        return redirect('/home/admin');
    }

    public function cadastroEmpresa(Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('admin');
        }

        $newEmpresa = new EmpresaModel();
        $newEmpresa->empresa = $request->name_empresa;
        $newEmpresa->save();

        return redirect('/home/admin');
    }

    public function cadastroEstabelecimento(Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('admin');
        }

        $newEstabelecimento = new EstabelecimentoModel();
        $newEstabelecimento->desc_estabelecimento = $request->name_estabelecimento;
        $newEstabelecimento->save();

        return redirect('/home/admin');
    }

    public function cadastroSquad(Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('admin');
        }

        $newSquad = new SquadModel();
        $newSquad->squad = $request->name_squad;
        $newSquad->save();

        return redirect('/home/admin');
    }
}
