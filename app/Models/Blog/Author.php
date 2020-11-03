<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $connection = 'amazonia_admin';
    protected $table = 'users';

    protected $fillable = [
        'name', 'identificacion', 'email', 'password', 'estado',
    ];
}
