<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
  
  public function features() {
    return $this->hasMany('App\Feature');
  }
  
  public function maps() {
    return $this->hasMany('App\Map');
  }
  
  public function user() {
        return $this->belongsTo('App\User');
    }
  
}
