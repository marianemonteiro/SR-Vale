<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*Route::group(['prefix' => 'api', 'namespace' => 'Api', function(){
    Route::resource('pontoencontros', 'PontoencontrosController');
}]);
*/


Route::group(['namespace' => 'Api'], function(){
    //Mapeamento via resource
    //route::resource('alertas', 'AlertasController');

    //Mapeamento manual das rotas
    Route::get('alertas', 'AlertasController@index');
    Route::post('alertas', 'AlertasController@store');
    Route::get('alertas/{alerta}', 'AlertasController@show');
    Route::put('alertas/{alerta}', 'AlertasController@update');
    Route::delete('alertas/{alerta}', 'AlertasController@destroy');

    Route::get('pontoencontros', 'PontoencontrosController@index');
    Route::post('pontoencontros', 'PontoencontrosController@store');
    Route::get('pontoencontros/{pontoencontro}', 'PontoencontrosController@show');
    Route::put('pontoencontros/{pontoencontro}', 'PontoencontrosController@update');
    Route::delete('pontoencontros/{pontoencontro}', 'PontoencontrosController@destroy');

    Route::get('predios', 'PrediosController@index');
    Route::post('predios', 'PrediosController@store');
    Route::get('predios/{predio}', 'PrediosController@show');
    Route::get('predios/{predio}/salas', 'PrediosController@salas');
    Route::put('predios/{predio}', 'PrediosController@update');
    Route::delete('predios/{predio}', 'PrediosController@destroy');

    Route::get('rotafugas', 'RotafugasController@index');
    Route::post('rotafugas', 'RotafugasController@store');
    Route::get('rotafugas/{rotafuga}', 'RotafugasController@show');
    Route::put('rotafugas/{rotafuga}', 'RotafugasController@update');
    Route::delete('rotafugas/{rotafuga}', 'RotafugasController@destroy');

    Route::get('salas', 'SalasController@index');
    Route::post('salas', 'SalasController@store');
    Route::get('salas/{sala}', 'SalasController@show');
    Route::get('salas/{sala}/pontoencontro', 'SalasController@pontoencontro');
    Route::get('salas/{sala}/rotafuga', 'SalasController@rotafuga');
    Route::put('salas/{sala}', 'SalasController@update');
    Route::delete('salas/{sala}', 'SalasController@destroy');

    Route::get('usuarios', 'UsuariosController@index');
    Route::post('usuarios', 'UsuariosController@store');
    Route::get('usuarios/{usuario}', 'UsuariosController@show');
    Route::put('usuarios/{usuario}', 'UsuariosController@update');
    Route::delete('usuarios/{usuario}', 'UsuariosController@destroy');

    Route::get('soap', 'SoapController@show');
});


