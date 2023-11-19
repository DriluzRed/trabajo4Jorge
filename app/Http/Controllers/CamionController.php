<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camion;
class CamionController extends Controller
{
    public function index(){
        $camiones = Camion::all();
        return view('camion.index')->with('camiones',$camiones);
    }

    public function buscar(Request $request){
        $marca = $request->input('marca');
        $chapa = $request->input('chapa');

        // Filtrar los camiones según la marca y chapa
        $camionesFiltrados = Camion::with('carga')->where('marca', 'LIKE', "%$marca%")
            ->where('chapa', 'LIKE', "%$chapa%")
            ->get();

        // Retornar los resultados en formato JSON
        return response()->json($camionesFiltrados);
    }
}
