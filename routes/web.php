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

Route::get('/usuarios', 'UserController@index' )->name('users');
Route::get('/usuarios/nuevo', 'UserController@create')->name('users.new');
Route::get('/usuarios/{user}', 'UserController@show')->where('user', '\d+')->name('users.show');
Route::get('/usuarios/{id}/editar', 'UserController@edit')->where('id', '\d+')->name('users.edit');

Route::get('/saludo/{name}/{nickname?}', 'WelcomeController')->name('wellcome');