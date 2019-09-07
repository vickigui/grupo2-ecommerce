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


Route::get('/registro', 'RegistroController@registro');

Route::get('/login', 'LoginController@login');

Route::get('/perfil', 'PerfilController@perfil');

Route::get('/carrito', 'CarritoController@carrito');

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
