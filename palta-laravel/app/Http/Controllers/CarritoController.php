<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\CarritoController;
use App\Carrito;


class CarritoController extends Controller
{
  public function carrito () {
      return view('carrito');
    }

  public function index () {
    $carritos = Carrito::all();

    return view('carritos.index', compact('carritos'));
  }

  public function show ($id) {
    $carrito = Carrito::findOrFail($id);

    return view('carritos.show', compact('carrito'));
  }
  public function borrarCarrito () 
  {
    // code...
  }
}
