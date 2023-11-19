<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carga;
class CargaController extends Controller
{
    public function index()
    {
        $cargas = Carga::all();
        return view('carga.index')->with('cargas', $cargas);
    }
}
