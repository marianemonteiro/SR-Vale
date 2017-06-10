<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.principal');
});


Route::resource('pontoencontros', 'PontoencontrosController');

Route::resource('usuarios', 'UsuariosController');

Route::resource('alertas', 'AlertasController');

Route::resource('predios', 'PrediosController');

Route::resource('salas', 'SalasController');

Route::resource('rotafugas', 'RotafugasController');

Route::get('mensagens/create/{mensagen}', 'MensagensController@create');

Route::resource('mensagens', 'MensagensController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
