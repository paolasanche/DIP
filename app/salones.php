<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class salones extends Model
{
  
    protected $primarykey = "id";
    protected $fillable = ["id","direccion","calle","cp","contacto","telefono","correo"];

}
