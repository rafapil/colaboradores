<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CargosModel;
use App\TriboModel;

class AdminController extends Controller
{

    public function lista(){
        $cargos = CargosModel::all();
        $tribos = TriboModel::all();

        return view ('admin', compact('cargos','tribos'));
    }

    public function cadastroCargo(Request $request){
        if($request->isMethod('GET')){
            return view ('admin');
        }

        $newCargo = new CargosModel();
        $newCargo->cargo = $request->name_cargo;
        $newCargo->save();

        return redirect ('/home/admin');


    }

    public function cadastroTribo(Request $request){
        if($request->isMethod('GET')){
            return view ('admin');
        }

        $newTribo = new TriboModel();
        $newTribo->tribonome = $request->name_tribo;
        $newTribo->save();

        return redirect('/home/admin');
    }



}
