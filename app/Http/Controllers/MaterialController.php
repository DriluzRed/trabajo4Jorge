<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
class MaterialController extends Controller
{
    public function index(){
        $materiales = Material::all();
        return view('material.index')->with('materiales',$materiales);
    }
    public function buscar(Request $request)
    {
        $nombre = $request->input('nombre');
        $cargaPeligrosa = $request->input('cargaPeligrosa');
        $materialesFiltrados = Material::where('nombre', 'LIKE', "%$nombre%")
            ->when($cargaPeligrosa !== null, function ($query) use ($cargaPeligrosa) {
                return $query->where('carga_peligrosa', $cargaPeligrosa);
            })
            ->get();
        return response()->json($materialesFiltrados);
    }
}
