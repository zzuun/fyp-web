<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
  public function institute()
  {
      return $this->belongsTo('App\Institute');
  }

  public function department()
  {
      return $this->belongsTo('App\Department');
  }

  public function degree()
  {
      return $this->belongsTo('App\Degree');
  }

  public function user()
  {
      return $this->belongsTo('App\User');
  }
}
