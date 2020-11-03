<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $connection = 'amazonia_admin';

    protected $fillable = [
        'fecha', 'titulo', 'slug', 'imagen', 'contenido', 'users_id'
    ];

    public function media_posts() {
        return $this->hasMany('App\Models\Blog\Media_post', 'posts_id');
    }

    public function comments() {
        return $this->hasMany('App\Models\Blog\Comment', 'posts_id');
    }

    public function author() {
        return $this->belongsTo('App\Models\Blog\Author', 'users_id');
    }
}
