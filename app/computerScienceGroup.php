<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class computerScienceGroup extends Model
{
  public function degrees()
  {
      return $this->hasManyThrough('App\Degree', 'App\PostRequisite');
  }
}
