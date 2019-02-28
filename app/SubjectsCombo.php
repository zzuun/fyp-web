<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectsCombo extends Model
{
  public function degree()
  {
      return $this->belongsTo('App\degree');
  }
}
