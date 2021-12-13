<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class planes extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_plan';
    public $timestamps = false;

    function actividades_plan(){
        return $this->hasMany(actividad_plan::class, 'id_plan')->with('actividad')->with('equipo');
    }

    function laboratorio(){
        return $this->hasOne(laboratorio::class, 'id_laboratorio', 'id_laboratorio');
    }

    function cuatrimestre(){
        return $this->hasOne(cuatrimestre::class, 'id_cuatrimestre', 'id_cuatrimestre');
    }
}
