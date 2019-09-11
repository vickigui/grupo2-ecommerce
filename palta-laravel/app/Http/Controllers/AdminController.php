<?php

namespace App\Http\Controllers;
use App\Productos;

use Illuminate\Http\Request;

class adminController extends Controller
{
  public function listaProductos () {
      $productos = Productos::all();
      return view('admin', compact('productos'));
    }
}
