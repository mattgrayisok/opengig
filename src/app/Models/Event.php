<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    protected $fillable = [
        'name', 'start_timestamp', 'end_timestamp'
    ];

    public function venue(){
      return $this->belongsTo('App\Models\Venue');
    }

    public function sets(){
      return $this->hasMany('App\Models\Set');
    }

}
