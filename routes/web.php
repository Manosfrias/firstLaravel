<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', function(){
    return 'Home';
});

//NombreDelControlador@NombreDelMetodo

Route::get('/usuarios', 'UserController@index' )->name('users');

Route::get('/usuarios/nuevo', 'UserController@create')->name('users.new');
Route::post('/usuarios/', 'UserController@store');

Route::get('/usuarios/{user}', 'UserController@show')->where('user', '\d+')->name('users.show');
Route::get('/usuarios/{user}/editar', 'UserController@edit')->name('users.edit');

Route::get('/saludo/{name}/{nickname?}', 'WelcomeController')->name('wellcome');



    
