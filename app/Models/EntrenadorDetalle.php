<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EntrenadorDetalle extends Model
{
    protected $table = 'entrenador_detalles';

    protected $fillable = [
        'empleado_id',
        'facebook',
        'instagram',
        'otro',
        'descripcion',
        'img_perfil',
        'img_portada'
    ];
}