<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    public function comments() {
        return $this->morphMany('App\Comment', 'commentable');
    }
  
    public function collection() {
      return $this->belongsTo('App\Collection');
    }
  
    public function user() {
        return $this->belongsTo('App\User');
    }
}
