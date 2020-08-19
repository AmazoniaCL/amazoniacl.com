<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial_correo extends Model
{
    protected $fillable = [
        'id', 'fecha', 'respuesta', 'correos_id'
    ];
}
