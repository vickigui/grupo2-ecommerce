<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\ProductosController;
use App\Productos;


class ProductosController extends Controller
{
  public function listaProductos () {
      $productos = Productos::all();

      return view('productos', compact('productos'));
    }
}
