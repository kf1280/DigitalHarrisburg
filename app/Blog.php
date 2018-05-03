<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function comments() {
        return $this->morphMany('App\Comment', 'commentable');
    }
  
    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
  
    public function lastUser() {
      return $this->belongsTo('App\User', 'last_user');
    }
}
