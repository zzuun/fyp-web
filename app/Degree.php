<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
  public function preRequisites()
  {
      return $this->hasMany('App\PreRequisite');
  }
  public function postRequisites()
  {
      return $this->hasMany('App\PostRequisite');
  }
  public function subjectsCombos()
  {
      return $this->hasMany('App\subjectsCombo');
  }
  public function institute()
  {
      return $this->belongsTo('App\Institute');
  }
}
