<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class engineeringGroup extends Model
{
  public function degrees()
  {
      return $this->hasManyThrough(
        Degree::class,
        PostRequisite::class,
        'engineering_group_id',
        'post_requisite_id',
        'id',
        'id'
      );
  }
}
