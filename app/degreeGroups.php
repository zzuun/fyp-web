<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class degreeGroups extends Model
{
  public function degree()
  {
      return $this->belongsTo('App\Degree');
  }
}
