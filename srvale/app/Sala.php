<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    public function predio(){

        return $this -> belongsTo(Predio::Class);
    }

    public function usuarios(){

    return $this -> hasMany(Usuario::Class);
    }


    public function rotafuga(){
        return $this -> belongsToMany(Rotafuga::Class, 'rotafuga_salas');
    }


}
