<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControl;
use App\Models\Post;
use App\Models\Producto;

/*
Route::get('/', function(){return view('welcome');});
Route::get('/index', [HomeControl::class,"index"]);
Route::get('/alert', [HomeControl::class,"alert"]);
Route::get('/botono', [HomeControl::class,"buttonview"]);
Route::get('/edit', [HomeControl::class,"edit"]);
Route::get('/create', [HomeControl::class,"create"]);
Route::get('/show', [HomeControl::class,"show"]);
Route::get('/inicio', [HomeControl::class,"inicio"]);*/

Route::get('/posts', [HomeControl::class,'index']);
Route::get('/posts/create', [HomeControl::class,"create"]);
Route::get('/posts/edit', [HomeControl::class,"edit"]);
Route::get('/posts/{id}', [HomeControl::class,"show"]);

Route::get('/prueba', function() {
    $post = new Post;

    $post->titulo = 'desarrollo de Aplicaciones Web 2';
    $post->contenido = 'Encuentro 1, modelos';
    $post->imagen_url = 'imagen_url';
    $post->estado = 'publicado';
    $post->fecha_publicacion = '2025-07-20';
    $post->imagen_url = 'www.google.com';
    $post->save();
    return $post;
});

Route::get('/producto', function() {
    $post = new Producto();
    
    $post->nombre = 'chimichurri';
    $post->precio = '69';
    $post->cantidad = '48';
    $post->descripcion = 'publicadonkjnflnjdabgkjbbbgkjbgjbsgbjbddbfdsfdsgfdsgdsgkjbgkfdbgkjdfkdskgkdangfdkj';
    
    $post->save();

    return response()->json([
        'message' => 'Producto insertado correctamente.',
        'producto' => $post
    ]);
}
);



































Route::get('/pruebaupdate', function() {

    $post = Post::find(1003);

    $post->titulo = 'Base de Datos 2';
    $post->contenido = 'Encuentro 2, Esctructutras de Datos';
    $post->imagen_url = 'imagen_url';
    $post->estado = 'publicado';
    $post->fecha_publicacion = '2025-07-20';
    $post->save();
    return $post;
});

Route::get('/pruebaupdate2', function() {

    $post = Post::where('titulo','Base de Datos 2')->first();
    $post->titulo = 'Base de Datos 2';
    $post->contenido = 'Esta clase tiene 10 encuentros';
    $post->save();
    return $post;
});

Route::get('/pruebadelete', function() {

    $post = Post::find(1002);
    $post->delete();
    return $post;
    
});

Route::get('/pruebaall', function() {

    $post = Post::all();
    return $post;
    
});

Route::get('/pruebaall2', function() {

    $post = Post::whereBetween('id', ['1525','1530'])->get();
    return $post;
    
});