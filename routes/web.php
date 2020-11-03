<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog\Post;

Auth::routes();

Route::get('/', function () {
    $posts = Post::with('comments')->orderBy('fecha', 'desc')->limit('3')->get();
    return view('welcome', ['posts' => $posts]);
})->name('index');

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/sig', function () {
    return view('sig');
});

Route::get('/parque-automotor', function () {
    return view('parque_automotor');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/responder/correo/{id}', 'CorreoController@historial');
Route::post('/responder/correo', 'CorreoController@responder');

Route::post('/create/cotizacion', 'CotizacionController@create');
Route::get('/aceptar/cotizacion/{id}', 'CotizacionController@aceptar');

Route::post('/create/correo', 'CorreoController@create');


Route::get('/home', 'HomeController@index')->name('home');

// Rutas para login con Google
Route::get('/auth/redirect/{provider}', 'SocialController@redirect')->name('google');
Route::get('/callback/{provider}', 'SocialController@callback');

// Rutas para el Blog
Route::get('/blog', 'BlogController@index');
Route::get('/blog/{post}', 'BlogController@post');
Route::post('/blog/comentar', 'BlogController@comentar');
