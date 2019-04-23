<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Dataviewer;

class Degree extends Model
{
  protected $fillable = [
      'name', 'shiftMorning', 'shiftAfternoon', 'noOfSeats', 'duration', 'lastMerit', 'fees', 'institute_id', 'department_id', 'system', 'creditHours', 'shiftAfternoon', 'numberOfViews'
  ];
  public function degreeGroup()
  {
    return $this->belongsTo('App\degreeGroups');
  }
  public function preRequisites()
  {
      return $this->hasMany('App\PreRequisite');
  }
  public function postRequisites()
  {
      return $this->hasMany('App\PostRequisite');
  }
  public function subjectsCombos()
  {
      return $this->hasMany('App\subjectsCombo');
  }
  public function institute()
  {
      return $this->belongsTo('App\Institute');
  }
  public function department()
  {
      return $this->belongsTo('App\Department');
  }
}
