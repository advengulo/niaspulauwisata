<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acaradanfestival extends Model
{
  protected $fillable = ['acaradanfestival_img', 'acaradanfestival_lokasi', 'acaradanfestival_tanggal'];

  public function artikel()
  {
    return $this->belongsTo('App\Artikel', 'artikels_id');
  }
}
