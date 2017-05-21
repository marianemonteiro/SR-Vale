<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    public function rotafuga(){
        return $this->belongsTo(Rotafuga::Class);
    }
}
