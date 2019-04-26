<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
  public function subareas()
    {
        return $this->hasMany('App\Subarea');
    }
    public function Address()
    {
      return $this->belongsTo('App\Address');
    }
}
