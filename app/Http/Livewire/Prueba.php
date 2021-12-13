<?php

namespace App\Http\Livewire;

use App\Http\Controllers\Controller;
use Livewire\Component;

class Prueba extends Component
{
    public function render(){
        return view('MisVistas.Planes');
    }

    public function ObtenerPLanes(){
        return 'a';
    }
}
