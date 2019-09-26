<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'fullName', 'fatherName', 'motherName', 'profileAddress','student_id',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
