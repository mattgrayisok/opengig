<?php

namespace App\Models;

use App\Traits\UuidModel;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    use UuidModel;

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
