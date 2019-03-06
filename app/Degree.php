<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
  public function degree_infos()
  {
      return $this->hasMany('App\DegreeInfo');
  }
  public function preRequisites()
  {
      return $this->hasMany('App\PreRequisite');
  }
}
