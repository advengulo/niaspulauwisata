<?php

namespace App;

use App\Artikel;
use Illuminate\Database\Eloquent\Model;

class Transportasi extends Model
{
    protected $fillable = ['transportasi_name','artikel_id', 'transportasi_gambar', 'transportasi_jenis'];

    public function artikel()
    {
        return $this->belongsTo('App\Artikel', 'artikel_id');
    }
}
