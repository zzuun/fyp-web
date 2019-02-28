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
  public function commerceGroups()
  {
      return $this->belongsTo('App\commerceGroup');
  }
  public function fineArtsGroups()
  {
      return $this->belongsTo('App\fineArtsGroup');
  }
  public function computerScienceGroups()
  {
      return $this->belongsTo('App\computerScienceGroup');
  }
  public function engineeringGroups()
  {
      return $this->belongsTo('App\engineeringGroup');
  }
  public function medicalGroups()
  {
      return $this->belongsTo('App\medicalGroup');
  }
}
