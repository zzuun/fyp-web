<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
  protected $fillable = [
      'name', 'principal_name', 'hostel', 'coEducation', 'instituteType', 'transportation', 'affiliation', 'important_dates', 'sector', 'scholarship'
  ];
  public function degrees()
    {
        return $this->hasMany('App\Degree')->orderby('numberOfViews','desc');
    }
  public function departments()
    {
        return $this->hasMany('App\Department')->orderby('noOfViews','desc');;
    }
  public function address()
    {
        return $this->hasOne('App\Address');
    }
  // protected $casts = [
  //       'important_dates' => 'array'
  //   ];
}
