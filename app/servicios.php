<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicios extends Model
{
       protected $primarykey = "id";
    protected $fillable = ["id","nombre","tiposervicios","costo","detalle"];
}
