<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Correo extends Model
{
    protected $fillable = [
        'fecha', 'nombre', 'apellido', 'email', 'asunto', 'mensaje', 'fecha_respuesta', 'id_user_respuesta', 'respuesta'
    ];

    public function historial() {
        return $this->hasMany('\App\Historial_correo', 'correos_id');
    }
}

