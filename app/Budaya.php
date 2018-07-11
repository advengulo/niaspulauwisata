<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Artikel;

class Budaya extends Model
{
  protected $fillable = ['budaya_name','artikel_id','budaya_gambar', 'budaya_lokasi'];

  public function artikel()
  {
    return $this->belongsTo('App\Artikel', 'artikels_id');
  }
}
