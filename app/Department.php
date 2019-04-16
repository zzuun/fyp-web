<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
  public function institute()
  {
      return $this->belongsTo('App\Institute');
  }
  public function faculty()
  {
      return $this->hasOne('App\Faculty');
  }
  public function degrees()
  {
      return $this->hasMany('App\Degree')->orderby('numberOfViews','desc');
  }
}
