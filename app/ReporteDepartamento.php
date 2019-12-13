<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReporteDepartamento extends Model
{
  protected $table = 'reportedepartamento';
  protected $fillable = ['id','nombre','cantidad'];
  protected $primaryKey = 'id';
}
