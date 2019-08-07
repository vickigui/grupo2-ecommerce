<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\LoginController;


class LoginController extends Controller
{
  public function login () {
      return view('login');
    }
}
