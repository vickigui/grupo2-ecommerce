<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    public $table = "producto";
    public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];
    
}
