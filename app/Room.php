<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function contract()
    {
        return $this->belongsTo('App\Contract');
    }

    public function services()
    {
        return $this->belongsToMany('App\Service',
            'room_service');
    }

    public function equipments()
    {
        return $this->belongsToMany('App\Equipment', 'room_equipment');
    }
}
