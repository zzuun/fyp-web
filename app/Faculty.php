<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
  protected $fillable = [
      'name', 'designation', 'department_id',
  ];
  public function department()
  {
      return $this->belongsTo('App\department');
  }
}
