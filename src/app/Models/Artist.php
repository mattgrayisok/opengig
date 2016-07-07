<?php

namespace App\Models;

use App\Traits\UuidModel;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{

    use UuidModel;

    protected $fillable = [
        'name'
    ];

    public function sets(){
      return $this->hasMany('App\Models\Set');
    }

}
