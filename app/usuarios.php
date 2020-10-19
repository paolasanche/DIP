<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    protected $primarykey = "id";
    protected $fillable = ["id","nombre","apellido","correo","telefono","user","password"];

}
