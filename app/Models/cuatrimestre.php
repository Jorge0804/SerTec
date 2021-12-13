<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuatrimestre extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_cuatrimestre';
    protected $table = 'cuatrimestre';
}
