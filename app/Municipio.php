<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $connection = 'amazonia_admin';

    protected $fillable = [
        'nombre', 'departamentos_id'
    ];

    public function departamentos() {
        return $this->belongsTo('App\Departamento');
    }
}
