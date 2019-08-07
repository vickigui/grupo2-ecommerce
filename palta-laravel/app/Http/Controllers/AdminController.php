<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\AdminController;


class AdminController extends Controller
{
  public function admin () {
      return view('admin');
    }
}
