<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DegreeInfo extends Model
{
  public function subjectsCombos()
  {
      return $this->hasMany('App\SubjectsCombo');
  }
  public function institute()
  {
      return $this->belongsTo('App\Institute');
  }
  public function degree()
  {
      return $this->belongsTo('App\Degree');
  }
}
