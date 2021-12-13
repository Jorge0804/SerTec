<?php

namespace App\Http\Controllers\Componentes\Equipos;

use App\Http\Controllers\Controller;
use App\Models\equipos;
use Illuminate\Http\Request;
use Livewire\Component;

class Agregar extends Component
{
    public function render(){
        return view('MisVistas.Equipos.Agregar');
    }

    public function Registrar(Request $r){
        $equipo = new equipos();
        $equipo->nombre = $r->post('nombre');
        $equipo->Tipo_equipo = $r->post('Tipo_equipo');
        $equipo->Descripcion = $r->post('Descripcion');
        $equipo->Serie = $r->post('Serie');
        $equipo->save();

        return true;
    }
}
