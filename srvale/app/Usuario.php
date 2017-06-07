<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public function funcionario(){

        return $this -> belongsTo(Funcionario::Class);
    }

    public function visitante(){

        return $this -> belongsTo(Visitante::Class);
    }

    public function getBloqueadoAttribute ($value){
        return $value == 1 ? 'Ativo' : 'Inativo';
    }

    public function sala(){

        return $this -> belongsTo(Sala::Class);
    }

    public function mensagen(){

        return $this -> hasOne(Mensagen::Class);
    }

    public function tipousuario(){

    return $this -> belongsTo(Tipousuario::Class);
    }

    public function alertas(){

        return $this -> hasMany(Alerta::Class);
    }


}
