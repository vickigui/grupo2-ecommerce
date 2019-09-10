<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Producto;
use App\User;

class Carrito extends Model
{

  public $timestamps = false;
  public $guarded = [];

  public function productos () {
    return $this->belongsToMany(Producto::class, "carritos_productos", "carritos_id", "productos_id");
   }

 public function user () {
   return $this->belongsTo(User::class, "user_id");
  }


}
