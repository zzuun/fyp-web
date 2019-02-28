<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreRequisite extends Model
{
  public function degree()
  {
      return $this->belongsTo('App\Degree');
  }
}
