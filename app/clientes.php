<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    

    protected $primarykey = "id";
    protected $fillable = ["id","nombre","apellido","correo","telefono","user","password"];

}
