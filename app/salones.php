<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class salones extends Model
{
  
    protected $primarykey = "idsalones";
    protected $fillable = ["idsalones","direccion","calle","cp","contacto","telefono","correo"];

}
