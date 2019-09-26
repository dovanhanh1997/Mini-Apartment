<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [
        'fullName', 'fatherName', 'motherName', 'profileAddress','student_id',
    ];

    public function contract()
    {
        return $this->belongsTo(Contract::class);
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }

    public function storeStudent($request)
    {
        return User::create($request->all());
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
