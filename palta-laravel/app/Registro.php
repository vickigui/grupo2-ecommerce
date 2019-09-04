<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
  public $table = "usuarios";
  public $timestamps = false;
  public $guarded = [];
}
