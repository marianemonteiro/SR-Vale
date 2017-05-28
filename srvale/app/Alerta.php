<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alerta extends Model
{
    public function tipoalerta(){

        return $this -> belongsTo(Tipoalerta::Class);
    }

    public function statusalerta(){

        return $this -> belongsTo(Tipoalerta::Class);
    }

    public function tipomensagen(){

        return $this -> belongsTo(Tipoalerta::Class);
    }


    public function usuario(){

        return $this -> belongsTo(Usuario::Class);
    }

    public function getPrioridadeAttribute ($value){
        return $value == 0 ? 'Baixo' : ($value == 1 ? 'Médio' : 'Alto');
    }
}
