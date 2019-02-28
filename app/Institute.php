<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
  public function degrees()
    {
        return $this->hasMany('App\Degree');
    }
  public function address()
    {
        return $this->hasOne('App\Address');
    }
  protected $casts = [
        'important_dates' => 'array'
    ];
}
