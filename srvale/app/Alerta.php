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

    public function mensagen(){

        return $this -> hasOne(Mensagen::Class);
    }

    public function usuario(){

        return $this -> belongsTo(Usuario::Class);
    }

    public function getPrioridadeAttribute ($value){
        return $value == 0 ? 'Baixo' : ($value == 1 ? 'Médio' : 'Alto');
    }

    public function getQtdaprovadoresAttribute ($value){
        return $value == 1 ? 'Primeira aprovação' : ($value == 2 ? 'Segunda aprovação' : 'Terceira aprovação');
    }
}
