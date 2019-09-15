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
    return view('home');
});

Route::get('/perfil', 'PerfilController@perfil');

Route::get('/carritos', 'CarritoController@index');
Route::get('/carritos/{id}', 'CarritoController@show')->name('carritos.show');
Route::get('/carritos/borrarCarrito/{id}', 'CarritoController@borrarCarrito');
Route::post('/carritos/agregarProducto', 'CarritoController@agregarProducto');
Route::get('/carritos/borrarProducto/{id}', 'CarritoController@borrarProducto');
Route::get('/carritos/editar/{id}', 'CarritoController@editar');
Route::post('/carritos/editarProducto', 'CarritoController@editarProducto');

Route::get('/productos', 'ProductosController@listaProductos');
Route::get('/cargarProducto', 'ProductosController@nuevoProducto');
Route::post('/cargarProducto', 'ProductosController@cargarProductos');
Route::get('/productos/{id}', 'CarritoController@crearCarrito');

Route::get('/contacto', 'ContactoController@ConsultaIndex');
Route::post('/contacto', 'ContactoController@GuardarConsulta');

Route::get('/recetas', function () {
    return view('recetas');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/admin', 'AdminController@listaProductos');

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
