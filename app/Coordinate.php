<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinate extends Model
{
    public function marker() {
      return $this->belongsTo('App\Marker');
    }
}
