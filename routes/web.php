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

Route::resource('locales', 'LocalController');

Route::get('mesasUsu/{id_usuario}', 'Mesas_UsuarioController@show');

Route::post('mesasUsu', 'Mesas_UsuarioController@store');

Route::get('pedidos', 'PedidoController@index');


Route::resource('usuarios', 'UsuarioController');

//por lo que lei tengo que implementarlo antes del resource de mesas
Route::get('mesas/local/{local}', 'MesaController@mesaDeLocal');

Route::resource('mesas', 'MesaController');

Route::get('/', function () {
    return view('welcome');
});
