<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicalGroup extends Model
{
  public function postRequisite()
  {
      return $this->hasMany('App\PostRequisite');
  }
}
