<?php

namespace App\Http\Controllers\Componentes\Usuarios;

use App\Http\Controllers\Controller;
use App\Models\roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Agregar extends Component
{
    public function render(){
        $roles = roles::all();
        return view('MisVistas.Usuarios.Agregar', compact('roles'));
    }

    public static function Registrar(Request $r){
        $user = new User();
        $user->first_name = $r->post('nombre');
        $user->last_name = $r->post('apellidos');
        $user->password = Hash::make($r->post('password'));
        $user->email = $r->post('email');
        $user->id_rol = $r->post('id_rol');
        $user->save();
    }
}
