<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitante extends Model
{
    public function usuarios(){

        return $this -> hasOne(Usuario::Class);
    }
}
