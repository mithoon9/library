<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class memStudent extends Model
{
  public $timestamps = false;
  protected $fillable = ['memId', 'batch'];
  public function member(){
    return $this->hasMany('App\member');
  }
}
