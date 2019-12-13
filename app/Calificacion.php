<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    protected $table = 'calificacion';
    protected $fillable = ['id','nivel1','nivel2','nivel3','nivel4','nivel5','media','plato_id'];
    protected $primaryKey = 'id';
}
