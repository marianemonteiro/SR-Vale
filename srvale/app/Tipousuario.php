<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipousuario extends Model
{
    public function alertas(){

        return $this -> hasMany(Alerta::Class);
    }


    public function usuarios(){

        return $this -> hasMany(Usuario::Class);
    }
}
