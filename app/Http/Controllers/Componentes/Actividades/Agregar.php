<?php

namespace App\Http\Controllers\Componentes\Actividades;

use App\Http\Controllers\Controller;
use App\Models\actividades;
use Illuminate\Http\Request;
use Livewire\Component;

class Agregar extends Component
{
    public function render(){
        return view('MisVistas.Actividades.Agregar');
    }

    public static function Registrar(Request $r){
        $act = new actividades();
        $act->Descripcion = $r->post('Descripcion');
        $act->save();

        return true;
    }
}
