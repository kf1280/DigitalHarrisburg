<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    public function properties() {
      return $this->morphMany('App\Property', 'descriptive');
    }
  
    public function markers() {
      return $this->hasMany('App\Marker');
    }
  
    public function collection() {
      return $this->belongsTo('App\Collection');
    }
  
    public function user() {
        return $this->belongsTo('App\User');
    }
}
