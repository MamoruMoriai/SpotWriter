<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function prices()
    {
        return $this->hasMany('App\Price');
    }

    public function parking_lots()
    {
        return $this->hasMany('App\Parking_lot');
    }

    public function opening_hours()
    {
        return $this->hasMany('App\Opening_hour');
    }

    public function m_facilities()
    {
        return $this->hasMany('App/\M_facility');
    }

    public function country()
    {
        return $this->belongsTo('App\Country');
    }

    public function prefecture()
    {
        return $this->belongsTo('App\Prefecture');
    }
}
