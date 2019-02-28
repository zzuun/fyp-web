<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commerceGroup extends Model
{
  public function postRequisite()
  {
      return $this->belongsTo('App\PostRequisite');
  }
}
