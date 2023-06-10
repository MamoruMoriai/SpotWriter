<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    public function m_facility()
    {
        return $this->hasMany('App\M_facility');
    }
}
