<?php

namespace App\Http\Controllers;

use App\SquadModel;
use App\ColaboradorModel;
use App\PlantaoModel;
use Illuminate\Http\Request;

class PlantaoController extends Controller

{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $squads = SquadModel::all();
        $plantoes = PlantaoModel::all();
        $colaboradores = ColaboradorModel::where('squad_id', '=', '0')->get();

        return view('plantao', compact('squads', 'colaboradores', 'plantoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // aqui fazer os ajustes para pegar do metodo get o id da squad para usar no where do colaborador.
        // Era pra fazer em show mas o ip vai errado entao vai aqui mesmo

        $squads = SquadModel::all();
        $plantoes = PlantaoModel::all();
        $squad = $request->inputName;
        $colaboradores = ColaboradorModel::where('squad_id', '=', $squad)->get();

        return view('plantao', compact('colaboradores', 'squads', 'plantoes'));
    }

    /**
     * Metodo para inserir os dados criado a parte devido as particularidades da controller.
     *
     *
     * **/
    public function insert(Request $request)
    {
        $newPlantao = new PlantaoModel();
        $newPlantao->datainicio = $request->inputIncioP;
        $newPlantao->datafim = $request->inputFimP;
        $newPlantao->obs = $request->name_observacao;
        $newPlantao->colaborador_id = $request->inputColaborador;
        $newPlantao->save();

        return redirect('/plantao');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // aqui fazer os ajustes para pegar do metodo get o id da squad para usar no where do colaborador.
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
        //
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
        // return "Voce pediu para destruir: " . $id;
    }

    public function delete($id)
    {

        $delPlantao = PlantaoModel::find($id);
        $delPlantao->delete();
        return redirect('/plantao');
    }
}
