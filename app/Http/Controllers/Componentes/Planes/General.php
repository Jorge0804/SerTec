<?php

namespace App\Http\Controllers\Componentes\Planes;

use App\Models\planes;
use Illuminate\Http\Request;
use Livewire\Component;
use function view;

class General extends Component
{
    public function render(){
        $planes = planes::with('actividades_plan')->with('laboratorio')->with('cuatrimestre')->get();
        return view('MisVistas.Planes.Planes', compact('planes'));
    }

    public static function ObtenerPlan(){
        return planes::with('actividades_plan')->with('laboratorio')->with('cuatrimestre')->get();
    }

    public static function EliminarPlan(Request $r){
        $plan = planes::find($r->post('id_plan'));
        return $plan->delete();
    }

    public static function DescargarPlan(){
        $file=public_path().'/archivos/Plan.xls';

        $headers = array('Content-Type: application/xls');

        return response()->download($file, 'Plan.xls', $headers);
    }
}
