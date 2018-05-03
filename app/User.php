<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
  
    public function blogs() {
        return $this->hasMany('App\Blog', 'id');
    }
  
    public function blogLast() {
      return $this->hasMany('App\Blog', 'last_user');
    }
  
    public function comments() {
        return $this->hasMany('App\Comment');
    }
  
    public function features() {
        return $this->hasMany('App\Feature', 'id');
    }
  
    public function featureLast() {
      return $this->hasMany('App\Feature', 'last_user');
    }
  
    public function collections() {
        return $this->hasMany('App\Collection');
    }
  
    public function maps() {
        return $this->hasMany('App\Map', 'id');
    }
  
}
