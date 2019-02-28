<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class engineeringGroup extends Model
{
  public function postRequisites()
  {
      return $this->hasMany('App\PostRequisite');
  }
}
