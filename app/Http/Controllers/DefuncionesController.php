<?php

namespace App\Http\Controllers;

use App\Models\Defunciones;
use Illuminate\Http\Request;
use App\Models\Estado;


class DefuncionesController extends Controller
{
    public function getDefunciones(){
        $defunciones = Defunciones::all();
        $totalDefunciones = $defunciones->sum('casos');
        echo "Total de Defunciones : ". $totalDefunciones;
    }

    public function getDefuncionesEstado($idEstado){
        $estado = Estado::find($idEstado);
        $defuncionesEstados = Defunciones::where('estado_id', '=', $idEstado);
        $totalDefunciones = $defuncionesEstados->sum('casos');
        echo 'Defunciones de '. $estado->nombre ."Total : ". $totalDefunciones;
    }

    public function index(){
        self::getDefunciones();
     }

     public function show($idEstado){
        self::getDefuncionesEstado($idEstado);
     }
}
