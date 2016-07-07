<?php

namespace App\Models;

use App\Traits\UuidModel;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{

    use UuidModel;

    protected $fillable = [
        'name', 'address', 'website', 'latitude', 'longitude', 'timezone'
    ];

    public function country(){
      return $this->belongsTo('App\Models\Country');
    }

    public function stages(){
      return $this->hasMany('App\Models\Stage');
    }

    public function events(){
      return $this->hasMany('App\Models\Event');
    }

}
