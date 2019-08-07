<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\ProductosController;


class ProductosController extends Controller
{
  public function productos () {
      return view('productos');
    }
}
