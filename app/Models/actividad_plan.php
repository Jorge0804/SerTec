<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actividad_plan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_activ_plan';
    protected $table = 'actividad_plan';

    public $timestamps = false;

    function actividad(){
        return $this->hasOne(actividades::class, 'id_actividad', 'id_actividad');
    }

    function equipo(){
        return $this->hasOne(equipos::class, 'id_equipo', 'id_equipo');
    }
}
