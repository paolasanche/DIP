<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    protected $primarykey = "idusuarios";
    protected $fillable = ["idusuarios","nombre","apellido","correo","telefono","user","password"];

}
