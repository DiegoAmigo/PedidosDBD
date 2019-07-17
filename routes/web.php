<?php
use Illuminate\Support\Facades\Input;
use App\Local;
use App\Menu;
use App\Menu_Producto;

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


//obtener las mesas que ha reservado un usuario
Route::get('/mesasUsu/{id_usuario}', 'Mesas_UsuarioController@show');

//postear una mesa nueva
Route::post('/mesasUsu', 'Mesas_UsuarioController@store');


Route::post('elegirhorariomesa', 'MesaController@mesaEnLocal')->name('elegirhorariomesa');

//Route::get('pedidos', 'PedidoController@index');


//dejar un comentario del local
Route::post('/usuarios/comentar/{id_usuario}', 'UsuarioController@comentarLocal');

Route::get('/pedidos/{id_usuario}', 'PedidoController@pedidosUsuario');

Route::post('/usuarios/reservarMesa', 'UsuarioController@reservaMesa');
Route::post('/usuarios/realizarPedido', 'UsuarioController@realizarPedido');
Route::post('/mesasUsu/disponibles', 'Mesas_UsuarioController@mostrarMesasDisponibles')->name('mesasUsu/disponibles');

Route::get('/categorias/locales/{id}', 'CategoriaController@locales');


//ver el historial de un usuario
Route::get('/historial_usuarios/usuario/{id}', 'Historial_usuarioController@historial_usuarioDeUsuario');


//seccion admin VISTA
//para el admin cuando quiere ver la lista de locales aprobados y no
Route::get('/adminverlocales', 'LocalController@index3');

//para el admin cuando quiere aprobar el local
Route::get('/localess/{id}', 'LocalController@showValidar')->name('locales.validar');


//SECCION ADMIN LOCAL VISTAS
//cuando quiere ver su local y modificar datos del local y agregar nuevo menu
Route::get('/adminlocal/local/{id}', 'LocalController@showAdminLocal');

Route::post('/adminlocal/local/menu/agregarproducto/{id_menu}/{id_producto}', 'MenuController@agregarProducto')->name('menus.agregarProducto');

Route::get('adminlocal/local/menu/{id}', 'MenuController@showAdminLocal')->name('menus.verMenuAdmin');


Route::post('/locales/aprobar/{id_Local}', 'LocalController@aprobar')->name('locales.aprobar');

Route::get('/menus/productos/{id}', 'MenuController@productos')->name('menus.productos');

Route::get('/productos/ingredientes/{id}', 'ProductoController@ingredientes');

Route::get('/ubicaciones/usuarios/{id}', 'UbicacionController@usuarios_en_ubicacion');

Route::get('/ubicaciones/locales/{id}', 'UbicacionController@locales_en_ubicacion');

Route::get('/valoraciones/locales/{id}', 'ValoracionController@valoracionDeLocal');




//por lo que lei tengo que implementarlo antes del resource de mesas
Route::get('/mesas/local/{local}', 'MesaController@mesaDeLocal');

Route::get('/menus/pedidos', 'PedidoController@pedidosMenu');



Route::resource('/usuarios', 'UsuarioController');
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

Route::post('/locales/localesEnZona', 'LocalController@localesEnZona')->name('locales/localesEnZona');

Route::post('/menus/menus-local', 'MenuController@menuEnLocal')->name('menus/en-local');

Route::post('/carrito/agregar', 'CarritoController@agregarCarrito')->name('carrito/agregar');

Route::post('/carrito', 'CarritoController@actualizarCarrito')->name('carrito/actualizar');

Route::post('/carrito', 'CarritoController@quitarCarrito')->name('carrito/quitar');

Route::post('/carrito', 'CarritoController@obtenerCarrito')->name('carrito/obtener');

Route::post('/carrito', 'CarritoController@destruirCarrito')->name('carrito/destruir');

Route::post('/carrito', 'CarritoController@totalCarrito')->name('carrito/total');

Route::post('/carrito/obtenerTodo', 'CarritoController@obtenerTodoCarrito')->name('carrito/obtenerTodo');




Route::get('/', function () {
    return view('inicio');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/barras', function () {
    return view('barraSuperior');
});

Route::get('/reserva/{id_local}', function () {
    return view('reservaMesa');
});



Route::get('/carrito', function () {
    return view('carrito');
});