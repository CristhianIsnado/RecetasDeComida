<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nacional extends Model
{
  protected $table = 'nacional';
  protected $fillable = ['id','plato_id','departamento_id'];
  protected $primaryKey = 'id';
}
