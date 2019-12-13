<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
  protected $table = 'persona';
  protected $fillable = ['id','nombre','ap_paterno','ap_materno','sexo','fechanac'];
  protected $primaryKey = 'id';
}
