<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fineArtsGroup extends Model
{
  public function postRequisite()
  {
      return $this->belongsTo('App\PostRequisite');
  }
}
