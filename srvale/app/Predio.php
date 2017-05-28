<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Predio extends Model
{
    public function pontoencontro(){

        return $this -> belongsTo(Pontoencontro::Class);
    }

    public function salas(){

        return $this -> hasMany(Sala::Class);
    }

}
