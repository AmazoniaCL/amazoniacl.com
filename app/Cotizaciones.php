<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cotizaciones extends Model
{
    protected $connection = 'amazonia_admin';
    protected $table = 'cotizaciones';

    protected $fillable = [
        'id','num_cotizacion','fecha','tercero_id',  
        'responsable_contrato_id', 'cotizacion_parte_uno', 'cotizacion_parte_dos', 'aceptada'
    ];
}
