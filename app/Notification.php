<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $connection = 'amazonia_admin';

    protected $fillable = [
        'id','tipo','permiso','url','mensaje','visto'
    ];
}
