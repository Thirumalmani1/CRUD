<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
  protected $fillable = ['id','name','email','number', 'office'];


}
