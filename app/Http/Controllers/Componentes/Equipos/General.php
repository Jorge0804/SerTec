<?php

namespace App\Http\Controllers\Componentes\Equipos;

use App\Http\Controllers\Controller;
use App\Models\equipos;
use Illuminate\Http\Request;
use Livewire\Component;

class General extends Component
{
    public function render(){
        $equipos = equipos::all();
        return view('MisVistas.Equipos.Equipos', compact('equipos'));
    }
}
