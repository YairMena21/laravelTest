<?php

namespace App\Http\Controllers;
use App\Models\Defunciones;
use App\Models\Estado;
use App\Models\Confirmado;
use App\Models\Sospechosos;
use App\Models\Negativos;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class GraficasController extends Controller
{
    public function casosTotales() {
        $datos['estados'] = Estado::all();
        //Casos Confirmados
        $casosConfirmados = Confirmado::all();
        $datosAcomulados = 0;
        foreach ($casosConfirmados as $key) {
            $datosAcomulados+=$key->casos;
        }
        $datos['totalConfirmados']=$datosAcomulados;
        //Defunciones
        $defunciones = Defunciones::all();
        $datosAcomulados = 0;
        foreach ($defunciones as $key) {
            $datosAcomulados+=$key->casos;
        }
        $datos['totalDefunciones']=$datosAcomulados;
        $datos['estados'] = Estado::all();
        //Casos Sospechosos
        $casosSospechosos = Sospechosos::all();
        $datosAcomulados = 0;
        foreach ($casosSospechosos as $key) {
            $datosAcomulados+=$key->casos;
        }
        $datos['totalSospechosos']=$datosAcomulados;
        //Casos Negativos
        $casosNegativos = Negativos::all();
        $datosAcomulados = 0;
        foreach ($casosNegativos as $key) {
            $datosAcomulados+=$key->casos;
        }
        $datos['totalNegativos']=$datosAcomulados;

        
        $datos['id'] = 0;
        $datos['datos'] = [
            [
                "tipo" => "Confirmados",
                "cantidad" => $datos['totalConfirmados'],
            ],
            [
                "tipo" => "Defunciones",
                "cantidad" => $datos['totalDefunciones'],
            ],
            [
                "tipo" => "Sospechosos",
                "cantidad" => $datos['totalSospechosos'],
            ],
            [
                "tipo" => "Negativos",
                "cantidad" => $datos['totalNegativos'],
            ],
        ];
        return view('graficas')->with($datos);
    }
    
    
}