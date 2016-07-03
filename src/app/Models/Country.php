<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    public function venues(){
      return $this->hasMany('App\Models\Venue');
    }

}
