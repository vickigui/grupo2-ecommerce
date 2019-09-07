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

Route::get('/carritos/{id}', 'CarritoController@show')->name('carritos.show');
Route::get('/carritos/borrar/{id}', 'CarritoController@borrar')->name('carritos.borrar');
Route::get('/carritos', 'CarritoController@index');



Route::get('/productos', 'ProductosController@listaProductos');

Route::get('/contacto', 'ContactoController@contacto');

Route::get('/recetas', function () {
    return view('recetas');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/admin', 'AdminController@admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout');
