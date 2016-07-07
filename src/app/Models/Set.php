<?php

namespace App\Models;

use App\Traits\UuidModel;
use Illuminate\Database\Eloquent\Model;

class Set extends Model
{

    use UuidModel;

    protected $fillable = [
        'is_headline', 'start_timestamp', 'end_timestamp'
    ];

    public function event(){
      return $this->belongsTo('App\Models\Event');
    }

    public function artist(){
      return $this->belongsTo('App\Models\Artist');
    }

    public function stage(){
      return $this->belongsTo('App\Models\Stage');
    }

}
