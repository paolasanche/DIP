<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicios extends Model
{
       protected $primarykey = "idservicios";
    protected $fillable = ["idservicios","nombre","tiposervicios","costo","detalle"];
}
