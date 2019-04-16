<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subarea extends Model
{
  public function town()
  {
      return $this->belongsTo('App\Town');
  }
}
