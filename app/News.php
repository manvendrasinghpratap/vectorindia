<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    public function getWrittenByAttribute($value){
      //return ucwords($value);
      return $value;
    }
}
