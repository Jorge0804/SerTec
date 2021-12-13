<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $us = User::all();
        return view('dashboard', compact('us'));
    }
}
