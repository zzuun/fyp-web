<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
  public function institute()
  {
      return $this->belongsTo('App\Institute');
  }
  public function subarea()
  {
      return $this->hasOne('App\Subarea');
  }
  public function town()
  {
      return $this->hasOne('App\Town');
  }
}
