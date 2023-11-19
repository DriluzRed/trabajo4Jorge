<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carga extends Model
{
    use HasFactory;

    protected $table = 'carga';
    protected $fillable = ['camion_id','material_id','cantidad_kilos','activo'];
    
    public function camion(){
        return $this->belongsTo('App\Models\Camion');
    }

    public function material(){
        return $this->belongsTo('App\Models\Material');
    }
}
