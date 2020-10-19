<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tiposervicios extends Model
{

  protected $primarykey = "id";
    protected $fillable = ["id","nombre"];

}
