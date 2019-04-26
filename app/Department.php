<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
  protected $fillable = [
      'name', 'departmentType', 'institute_id',
  ];
  public function institute()
  {
      return $this->belongsTo('App\Institute');
  }
  public function faculty()
  {
      return $this->hasMany('App\Faculty');
  }
  public function wishlists()
  {
      return $this->hasMany('App\Wishlist');
  }
  public function degrees()
  {
      return $this->hasMany('App\Degree')->orderby('numberOfViews','desc');
  }
}
