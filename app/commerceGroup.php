<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commerceGroup extends Model
{
  public function degrees()
  {
      return $this->hasManyThrough('App\Degree', 'App\PostRequisite');
  }
}
