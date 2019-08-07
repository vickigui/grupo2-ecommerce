<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\ContactoController;


class ContactoController extends Controller
{
  public function contacto () {
      return view('contacto');
    }
}
