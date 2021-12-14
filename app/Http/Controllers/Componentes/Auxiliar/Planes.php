<?php

namespace App\Http\Controllers\Componentes\Auxiliar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Livewire\Component;

class Planes extends Component
{
    public function render(){
        $planes = \App\Models\planes::with('actividades_plan')->with('laboratorio')->where('responsable', '=', auth()->id())->with('cuatrimestre')->get();
        return view('MisVistas.Auxiliar.Planes', compact('planes'));
    }
}
