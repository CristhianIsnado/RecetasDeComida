<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
  protected $table = 'plato';
  protected $fillable = ['id','tipo','estado','titulo','descripcion_breve','descripcion','ingredientes','preparacion','imagen'];
  protected $primaryKey = 'id';
}
