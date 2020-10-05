<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    

    protected $primarykey = "idclientes";
    protected $fillable = ["idclientes","nombre","apellido","correo","telefono","user","password"];

}
