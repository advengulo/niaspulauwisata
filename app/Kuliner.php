<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuliner extends Model
{
  protected $fillable = ['kuliner_name','artikel_id','kuliner_gambar', 'kuliner_lokasi'];

  public function artikel()
  {
    return $this->belongsTo('App\Artikel', 'artikel_id');
  }
}
