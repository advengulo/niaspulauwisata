<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acaradanfestival extends Model
{
  protected $fillable = ['acaradanfestival_gambar','artikel_id', 'acaradanfestival_name'];

  public function artikel()
  {
    return $this->belongsTo('App\Artikel', 'artikel_id');
  }
}
