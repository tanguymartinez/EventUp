<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $primaryKey = "idEvent";

    public function ville(){
      return $this->hasOne('App\Ville');
    }

}
