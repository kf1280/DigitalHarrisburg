<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    
  
  
  public function feature() {
    return $this->hasMany('App\Feature');
  }
  
  public function map() {
    return $this->hasMany('App\Map');
  }
  
}
