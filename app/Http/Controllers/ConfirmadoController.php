<?php

namespace App\Http\Controllers;

use App\Models\Confirmado;
use App\Models\Estado;
use Illuminate\Http\Request;

class ConfirmadoController extends Controller
{
    public function getCasosConfirmados(){
        $confirmados = Confirmado::all();
        $totalCasos = $confirmados->sum('casos');
        echo "Casos Confirmados : ". $totalCasos;
     }
     
     public function getCasosConfirmadosEstado($idEstado){
        $estado = Estado::find($idEstado);
        $casosEstados = Confirmado::where('estado_id', '=', $idEstado);
        $totalCasos = $casosEstados->sum('casos');
        echo "Casos Confirmados de ". $estado->nombre.": ". $totalCasos;
        
     }
     public function index(){
        self::getCasosConfirmados();
     }

     public function show ($idEstado){
        self::getCasosConfirmadosEstado($idEstado);
     }
}
