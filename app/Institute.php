<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
  public function degree_infos()
    {
        return $this->hasMany('App\DegreeInfo');
    }
  public function address()
    {
        return $this->hasOne('App\Address');
    }
  protected $casts = [
        'important_dates' => 'array'
    ];
}
