<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CargaController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\CamionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Home');
})->name('home');

Route::get('/carga', [CargaController::class, 'index'])->name('carga.index');
Route::get('/material', [MaterialController::class, 'index'])->name('material.index');
Route::get('/camion', [CamionController::class, 'index'])->name('camion.index');

Route::get('/buscarCamion', [CamionController::class, 'buscar'])->name('buscar');
Route::get('/buscarMaterial', [MaterialController::class, 'buscar'])->name('buscarMaterial');
