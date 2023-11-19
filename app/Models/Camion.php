<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{
    use HasFactory;
    protected $table = 'camion';

    protected $fillable = ['marca','chapa','modelo','activo','capacidad_maximos_kilos'];

    public function carga(){
        return $this->hasMany('App\Models\Carga');
    }
}
