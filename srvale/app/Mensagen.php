<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensagen extends Model
{
    public function tipomensagem(){

        return $this -> belongsTo(Tipomensagen::Class);
    }

    public function tipoalerta(){

        return $this -> belongsTo(Tipoalerta::Class);
    }

    public function usuario(){

        return $this -> belongsTo(Usuario::Class);
    }
}
