<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    public function usuarios(){

        return $this -> hasOne(Usuario::Class);
    }
}
