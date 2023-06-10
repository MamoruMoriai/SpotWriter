<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    public function spot()
    {
        return $this->belongsTo('App\Spot');
    }
}
