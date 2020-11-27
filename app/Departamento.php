<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $connection = 'amazonia_admin';

    protected $fillable = [
        'nombre'
    ];

    public function municipios() {
        return $this->hasMany('App\Municipio', 'departamentos_id');
    }
}
