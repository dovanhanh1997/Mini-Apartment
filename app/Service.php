<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function rooms()
    {
        return $this->belongsToMany('App\Room','room_service');
    }

    public function electrics()
    {
        return $this->hasMany('App\Electric');
    }

    public function histories()
    {
        return $this->hasMany('App\History');
    }
}
