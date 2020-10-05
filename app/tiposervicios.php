<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tiposervicios extends Model
{

  protected $primarykey = "idtiposervicios";
    protected $fillable = ["idtiposervicios","nombre"];

}
