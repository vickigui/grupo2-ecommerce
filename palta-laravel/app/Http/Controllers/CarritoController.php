<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\CarritoController;


class CarritoController extends Controller
{
  public function carrito () {
      return view('carrito');
    }
}
