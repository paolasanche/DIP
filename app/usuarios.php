<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    protected $primarykey = "id";
    protected $fillable = ["id","nombre","apellido","correo","telefono","usuarios","password"];


    public function salones()
    {
        return $this->hasMany('App\salones');
        $usuarios = App\usuarios::find(1);
        $usuarios->salones()->where('id', '>=', 1)->get();

    }
    

    public function tiposervicios()
    {
        return $this->hasMany('App\tiposervicios');
        $usuarios = App\usuarios::find(1);
        $usuarios->tiposervicios()->where('id', '>=', 1)->get();

    }



}
