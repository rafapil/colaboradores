<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SquadModel;
use App\EscalaPlantaoModel;

class EscalaPlantaoController extends Controller
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
        $escalas = EscalaPlantaoModel::paginate(10);
        return view('escala', compact('squads', 'escalas'));
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
        //
        $squads = SquadModel::all();
        $squad = $request->inputName;

        $escalas = EscalaPlantaoModel::where('squad_id', '=', $squad, 'and', 'datafim', '<=', 'curdate() + 7')->get();
        //$escalas = EscalaPlantaoModel::where('squad_id', '=', $squad)->paginate(5);
        return view('escala', compact('squads', 'escalas'));
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
        return $id;
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
    }
}
