<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportePlato extends Model
{
  protected $table = 'reporteplato';
  protected $fillable = ['id','titulo','cantidad'];
  protected $primaryKey = 'id';
}
