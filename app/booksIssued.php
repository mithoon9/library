<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booksIssued extends Model
{
    protected $primaryKey = 'issueId';
    protected  $fillable = ['issueDate', 'retDate', 'bookName','bookId', 'memId'];
    public $timestamps = false;
    
    public function member(){
      return $this->belongs('App\member', 'memId', 'memId');
    }


}
