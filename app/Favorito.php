<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorito extends Model
{
  protected $table = 'favorito';
  protected $fillable = ['id','voto','n_usuario','plato_id','mi_favorita'];
  protected $primaryKey = 'id';
}
