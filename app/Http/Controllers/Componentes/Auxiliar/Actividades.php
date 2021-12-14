<?php

namespace App\Http\Controllers\Componentes\Auxiliar;

use App\Http\Controllers\Controller;
use App\Models\actividad_plan;
use Illuminate\Http\Request;
use Livewire\Component;

class Actividades extends Component
{
    public function  render(){
        $actividades = actividad_plan::with('actividad')->with('equipo')->where('id_plan', '=', $_GET['id_plan'])->get();
        return view('MisVistas.Auxiliar.Actividades', compact('actividades'));
    }

    public static function Descargar(){
        $file=public_path().'/archivos/Reporte.xlsx';

        $headers = array('Content-Type: application/xlsx');

        return response()->download($file, 'Reporte.xlsx', $headers);
    }

    public static function TerminarActividad(Request $r){
        $actividad = actividad_plan::find($r->post('id_actividad'));
        $actividad->tipo_mtento = $r->post('tipo');
        $actividad->status = 'Terminada';
        $actividad->save();

        return true;
    }
}
