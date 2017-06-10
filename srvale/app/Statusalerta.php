<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statusalerta extends Model
{
    public function alertas(){

        return $this -> hasMany(Alerta::Class);
    }
}
