<?php

namespace App;

use App\Artikel;
use Illuminate\Database\Eloquent\Model;

class Budaya extends Model
{
    protected $fillable = ['budaya_name','artikel_id','budaya_gambar', 'budaya_lokasi'];

    public function artikel()
    {
        return $this->belongsTo('App\Artikel', 'artikel_id');
    }
}
