<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Artikel;

class Transportasi extends Model
{
  protected $fillable = ['transportasi_name','artikel_id', 'transportasi_gambar', 'transportasi_jenis'];

  public function artikel()
  {
    return $this->belongsTo('App\Artikel', 'artikel_id');
  }
}
