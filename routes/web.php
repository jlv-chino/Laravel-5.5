<?php

use Illuminate\Support\Facades\Route;

Route::resource('/productos', 'ProductosController');

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/inicio', 'ProductosController@index');

Route::get('/crear', 'ProductosController@create');

Route::get('/actualizar', 'ProductosController@update');

Route::get('/insertar', 'ProductosController@store');

Route::get('/eliminar', 'ProductosController@destroy');*/

