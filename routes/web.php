<?php
use Illuminate\Support\Facades\Input;
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


Route::get('/mesasUsu/{id_usuario}', 'Mesas_UsuarioController@show');

Route::post('/mesasUsu', 'Mesas_UsuarioController@store');

//Route::get('pedidos', 'PedidoController@index');

Route::post('/usuarios/comentar/{id_usuario}', 'UsuarioController@comentarLocal');

Route::get('/pedidos/{id_usuario}', 'PedidoController@pedidosUsuario');

Route::post('/usuarios/reservarMesa', 'UsuarioController@reservaMesa');
Route::get('/mesasUsu/disponibles/{id_local}', 'Mesas_UsuarioController@mostrarMesasDisponibles');

Route::get('/categorias/locales/{id}', 'CategoriaController@locales');

Route::get('/historial_usuarios/usuario/{id}', 'Historial_usuarioController@historial_usuarioDeUsuario');

Route::post('/locales/aprobar/{id_Local}', 'LocalController@aprobar');

Route::get('/menus/productos/{id}', 'MenuController@productos');

Route::get('/productos/ingredientes/{id}', 'ProductoController@ingredientes');

Route::get('/ubicaciones/usuarios/{id}', 'UbicacionController@usuarios_en_ubicacion');

Route::get('/ubicaciones/locales/{id}', 'UbicacionController@locales_en_ubicacion');

Route::get('/valoraciones/locales/{id}', 'ValoracionController@valoracionDeLocal');


Route::resource('/usuarios', 'UsuarioController');

//por lo que lei tengo que implementarlo antes del resource de mesas
Route::get('/mesas/local/{local}', 'MesaController@mesaDeLocal');

Route::get('/menus/pedidos', 'PedidoController@pedidosMenu');

Route::resource('/categorias', 'CategoriaController');
Route::resource('/historial_usuarios', 'Historial_usuarioController');
Route::resource('/horarios', 'HorarioController');
Route::resource('/ingredientes', 'IngredienteController');
Route::resource('/locales', 'LocalController');
Route::resource('/menus', 'MenuController');
Route::resource('/mesas', 'MesaController');
Route::resource('/mesas_usuarios', 'Mesas_UsuarioController');
Route::resource('/metodo_pagos', 'Metodo_pagoController');
Route::resource('/pedido_metodo_pago', 'Pedido_Metodo_pagoController');
Route::resource('/pedidos', 'PedidoController');
Route::resource('/permisos', 'PermisoController');
Route::resource('/productos', 'ProductoController');
Route::resource('/roles', 'RolController');
Route::resource('/ubicaciones', 'UbicacionController');

Route::resource('/valoraciones', 'ValoracionController');



Route::get('/', function () {
    return view('welcome');
});
