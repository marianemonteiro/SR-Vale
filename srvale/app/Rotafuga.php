<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rotafuga extends Model
{
    public function salas(){
    return $this -> belongsToMany(Sala::Class, 'rotafuga_salas');
    }
}
