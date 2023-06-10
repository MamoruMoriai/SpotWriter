<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_facility extends Model
{
    public function spot()
    {
        return $this->belongsTo('App\Spot');
    }

    public function facility()
    {
        return $this->belongsTo('App\Facility');
    }
}
