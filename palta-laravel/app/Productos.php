<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Carrito;

class Productos extends Model
{
    public $table = "productos";
    public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];

    public function carritos () {
      return $this->belongsToMany(Carrito::class, "carritos_productos", "productos_id", "carritos_id")->withPivot("cantidad");
     }

}
