<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Productos;
use App\User;

class Carrito extends Model
{

  public $timestamps = false;
  public $guarded = [];

  public function productos () {
    return $this->belongsToMany(Productos::class, "carritos_productos", "carritos_id", "productos_id")->withPivot("cantidad", "id");
   }

 public function user () {
   return $this->belongsTo(User::class, "user_id");
  }


}
