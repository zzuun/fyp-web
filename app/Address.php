<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
  protected $fillable = [
      'location', 'city', 'email', 'website', 'lat', 'lng', 'phone_number', 'town_id', 'subarea_id', 'institute_id'
  ];
  public function institute()
  {
      return $this->belongsTo('App\Institute');
  }
  public function subarea()
  {
      return $this->hasOne('App\Subarea');
  }
  public function town()
  {
      return $this->hasOne('App\Town');
  }
}
