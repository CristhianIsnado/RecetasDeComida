<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userss extends Model
{
  protected $table = 'userss';
  protected $fillable = ['usuario','codigo','enail','foto','persona_id'];
  protected $primaryKey = 'usuario';
}
