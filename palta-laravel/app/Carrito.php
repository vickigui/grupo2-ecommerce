<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{

  public $timestamps = false;
  public $guarded = [];

  public function productos () {
    return $this->belongsToMany("App\Productos", "carritos_productos", "carritos_id", "productos_id");
   }

}
