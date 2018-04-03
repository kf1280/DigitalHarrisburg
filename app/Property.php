<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    public function descriptive() {
      return $this->morphTo();
    }
}
