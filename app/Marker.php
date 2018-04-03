<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marker extends Model
{
    public function coordinates() {
      return $this->hasMany('App\Coordinate');
    }
  
    public function properties() {
      return $this->morphMany('App\Property', 'descriptive');
    }
  
    public function map() {
      return $this->belongsTo('App\Map');
    }
}
