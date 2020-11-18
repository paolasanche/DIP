<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicios extends Model
{
       protected $primarykey = "id";
    protected $fillable = ["id","nombre","tiposervicios","costo","detalle"];



    public function tiposervicios()
    {
        return $this->hasMany('App\tiposervicios');
        $servicios = App\servicios::find(1);
        $servicios->tiposervicios()->where('id', '>=', 1)->get();

    }



}
