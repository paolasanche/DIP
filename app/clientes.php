<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    

    protected $primarykey = "id";
    protected $fillable = ["id","nombre","apellido","correo","telefono","user","password"];



    public function servicios()
    {
        return $this->hasMany('App\servicios');
        $clientes = App\clientes::find(1);
        $clientes->servicios()->where('id', '>=', 1)->get();

    }






}
