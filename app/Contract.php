<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $guarded = [];

    public function student()
    {
        return $this->hasOne(Student::class);
    }

    public function room()
    {
        return $this->hasOne('App\Room');
    }
}
