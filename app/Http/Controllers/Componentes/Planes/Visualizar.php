<?php

namespace App\Http\Controllers\Componentes\Planes;

use App\Http\Controllers\Controller;
use App\Models\actividades;
use App\Models\cuatrimestre;
use App\Models\equipos;
use App\Models\laboratorio;
use App\Models\planes;
use Illuminate\Http\Request;
use Livewire\Component;

class Visualizar extends Component
{
    public function render(Request $r){
        $plan = planes::with('actividades_plan')->with('laboratorio')->with('user')->with('cuatrimestre')->get()->find($r->get('id_plan'));
        return view('MisVistas.Planes.Visualizar', compact('plan'));
    }

    public static function infoPlan(){
        return planes::with('actividades_plan')->with('laboratorio')->with('cuatrimestre')->get()->find(3);
    }
}
