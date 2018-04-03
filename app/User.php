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
        'name', 'email', 'password',
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
        return $this->hasMany('App\Blog');
    }
  
    public function comments() {
        return $this->hasMany('App\Comment');
    }
  
    public function features() {
        return $this->hasMany('App\Feature');
    }
  
    public function collections() {
        return $this->hasMany('App\Collection');
    }
  
    public function maps() {
        return $this->hasMany('App\Map');
    }
  
}
