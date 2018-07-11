<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuliner extends Model
{
  protected $fillable = ['kuliner_img', 'kuliner_lokasi'];

  public function artikel()
  {
    return $this->belongsTo('App\Artikel', 'artikels_id');
  }
}
