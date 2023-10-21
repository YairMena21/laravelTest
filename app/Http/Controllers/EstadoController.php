<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
public function show(string $id) {

   
    echo Estado::find($id)->nombre;
}

public function index()
{
    return view('estados.index');
}

public function getEstados(){
    return response()->json(Estado::get());
}

}

