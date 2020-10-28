<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/{id}/{nombre}', function ($id, $nombre) {
    return "post N° ". $id . "</br>" . "nombre: ". $nombre;
});

Route::get('/inicio/{id}', 'Ejemplo3Controller@index');

Route::get('/', "PaginasController@inicio");
Route::get('/inicio', "PaginasController@inicio");
Route::get('/quinesSomos', "PaginasController@quinesSomos");
Route::get('/dondeEstamos', "PaginasController@dondeEstamos");
Route::get('/foro', "PaginasController@foro");

Route::resource("posts", "Ejemplo3Controller");*/

Route::get("/", "MiControlador@index");
Route::get("/crear", "MiControlador@create");
Route::get("/articulos", "MiControlador@store");
Route::get("/mostrar", "MiControlador@show");
Route::get("/contacto", "MiControlador@contactar");
Route::get("/galeria", "MiControlador@galery");
