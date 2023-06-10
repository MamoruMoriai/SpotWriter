<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opening_hour extends Model
{
    public function spot()
    {
        return $this->belongsTo('App\Spot');
    }
}
