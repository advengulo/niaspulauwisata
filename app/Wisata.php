<?php

namespace App;

use App\Artikel;
use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Wisata extends Model
{
    use Rateable;
    protected $fillable = ['wisata_name','artikel_id','wisata_gambar','wisata_video','wisata_rating', 'wisata_lokasi', 'wisata_jenis_id','latitude','longtitude'];
    
    public function artikel()
    {
        return $this->belongsTo('App\Artikel', 'artikel_id');
    }
    
    public function ulasan()
    {
        return $this->hasOne(Ulasan::class);
    }

    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }
}
