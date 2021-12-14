<?php

namespace App\Http\Controllers\Componentes\Planes;

use App\Http\Controllers\Controller;
use App\Models\actividad_plan;
use App\Models\actividades;
use App\Models\cuatrimestre;
use App\Models\equipos;
use App\Models\laboratorio;
use App\Models\planes;
use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Component;

class Agregar extends Component
{
    public function render()
    {
        $laboratorios = laboratorio::all();
        $cuatrimestres = cuatrimestre::all();
        $actividades = actividades::all();
        $equipos = equipos::all();
        $auxiliares = User::Where('id_rol', '=', 3)->get();
        return view('MisVistas.Planes.Agregar', compact('laboratorios', 'cuatrimestres', 'actividades', 'equipos', 'auxiliares'));
    }

    public function Registrar(Request $r){
        $plan = new planes();
        $plan->id_laboratorio = $r->post('id_laboratorio');
        $plan->responsable = $r->post('id_auxiliar');
        $plan->id_cuatrimestre = $r->post('id_cuatrimestre');
        $plan->elaborador_usuario = auth()->user()->first_name.' '.auth()->user()->last_name;
        $plan->status = "En espera";
        $plan->save();

        foreach ($r->post('actividades') as $act){
            $actividad = new actividad_plan();
            $actividad->id_actividad = $act['id_actividad'];
            $actividad->id_equipo = $act['id_equipo'];
            $actividad->id_plan = $plan->id_plan;
            $actividad->fecha_ini = date('Y-m-d', strtotime($act['fecha']));
            $actividad->save();
        }

        return true;
    }
}
