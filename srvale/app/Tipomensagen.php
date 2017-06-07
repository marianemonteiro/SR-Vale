<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipomensagen extends Model
{
    public function alertas(){

        return $this -> hasMany(Alerta::Class);
    }

    public function mensagen(){

        return $this -> hasOne(Mensagen::Class);
    }
}
