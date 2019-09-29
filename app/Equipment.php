<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $table = 'equipments';

    public $timestamps = false;

    public function rooms()
    {
        return $this->belongsToMany('App\Room', 'room_equipment');
    }
}
