<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class computerScienceGroup extends Model
{
  public function postRequisite()
  {
      return $this->hasMany('App\PostRequisite');
  }
}
