<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{

    protected $fillable = [
        'name'
    ];

    public function sets(){
      return $this->hasMany('App\Models\Set');
    }

}
