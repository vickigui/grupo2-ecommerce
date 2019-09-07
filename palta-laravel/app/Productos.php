<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    public $table = "producto";
    public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];

    public function carritos () {
      return $this->belongsToMany("App\Carrito", "carritos_productos", "productos_id", "carritos_id");
    }

}
