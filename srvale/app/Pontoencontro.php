<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pontoencontro extends Model
{
    public function predios(){
        return $this -> hasMany(Predio::Class);
    }
}
