<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carritosProductos extends Model
{
  public $table = "carritos_productos";
  public $timestamps = false;
  public $guarded = [];
}
