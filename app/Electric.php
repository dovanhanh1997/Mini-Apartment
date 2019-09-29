<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Electric extends Model
{
    public function service()
    {
        return $this->belongsTo('App\Service');
    }

    public $timestamps = false;

}
