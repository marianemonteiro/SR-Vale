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

    public function rotadefugas(){
        return $this -> belongsToMany(Rotafuga::Class, 'rotafugas_salas');
    }
}
