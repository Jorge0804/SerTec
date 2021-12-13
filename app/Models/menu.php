<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;

    protected $table = 'menu';

    function roles(){
        return $this->hasMany(menu_rol::class, 'id_menu', 'id_menu');
    }
}
