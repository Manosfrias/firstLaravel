<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', function(){
    return 'HOLA!';
});

//NombreDelControlador@NombreDelMetodo

Route::get('/usuarios', 'UserController@index' );
Route::get('/usuarios/nuevo', 'UserController@create');
Route::get('/usuarios/{id}', 'UserController@show')->where('id', '\d+');
Route::get('/usuarios/{id}/editar', 'UserController@edit')->where('id', '\d+');

Route::get('/saludo/{name}/{nickname?}', 'WelcomeController');