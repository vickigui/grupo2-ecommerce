<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\PerfilController;


class PerfilController extends Controller
{
  public function perfil () {
      return view('perfil');
    }

    public function index () {
      $users = User::all();

      return view('perfil.index', compact('users'));
    }

}
