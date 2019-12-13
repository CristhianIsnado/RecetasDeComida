<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PalabraClave extends Model
{
  protected $table = 'palabraclave';
  protected $fillable = ['id','clave','plato_id'];
  protected $primaryKey = 'id';
}
