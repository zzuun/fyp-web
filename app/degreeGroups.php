<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class degreeGroups extends Model
{
  protected $table = 'degreeGroups';
  public function degrees()
  {
      return $this->hasMany('App\Degree');
  }
}
