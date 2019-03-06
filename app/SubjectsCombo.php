<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectsCombo extends Model
{
  public function degree_infos()
  {
      return $this->belongsTo('App\DegreeInfo');
  }
}
