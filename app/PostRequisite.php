<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostRequisite extends Model
{
  public function degree()
  {
      return $this->belongsTo('App\Degree');
  }
  public function engineeringGroup()
  {
      return $this->belongsTo('App\engineeringGroup');
  }
}
