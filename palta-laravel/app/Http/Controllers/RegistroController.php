<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\RegistroController;


class RegistroController extends Controller
{
  public function registro () {
      return view('registro');
    }
}
