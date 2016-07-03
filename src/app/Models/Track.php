<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{

    protected $fillable = [
        'name', 'artist', 'is_cover'
    ];

    public function sets()
    {
        return $this->belongsToMany('App\Models\Set');
    }

}
