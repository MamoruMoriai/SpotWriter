<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parking_lot extends Model
{
    public function spot()
    {
        return $this->belongsTo('App\Spot');
    }
}
