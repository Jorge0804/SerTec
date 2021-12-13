<?php

namespace App\Http\Controllers\Componentes\Planes;

use App\Http\Controllers\Controller;
use App\Models\planes;
use Illuminate\Http\Request;
use Livewire\Component;

class Actividades extends Component
{
    public function render(){
        $plan = planes::with('actividades_plan')->with('laboratorio')->with('cuatrimestre')->get()->find(3);
        return view('MisVistas.Planes.Actividades', compact('plan'));
    }
}
