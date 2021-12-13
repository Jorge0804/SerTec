<?php

namespace App\Http\Controllers\Componentes\Actividades;

use App\Http\Controllers\Controller;
use App\Models\actividades;
use App\Models\equipos;
use Illuminate\Http\Request;
use Livewire\Component;

class General extends Component
{
    public function render(){
        $actividades = actividades::all();
        return view('MisVistas.Actividades.Actividades', compact('actividades'));
    }
}
