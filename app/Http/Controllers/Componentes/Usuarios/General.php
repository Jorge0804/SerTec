<?php

namespace App\Http\Controllers\Componentes\Usuarios;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Component;

class General extends Component
{
    public function render(){
        $usuarios = User::with('rol')->get();
        return view('MisVistas.Usuarios.Usuarios', compact('usuarios'));
    }
}
