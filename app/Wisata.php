<?php

namespace App;

use App\Artikel;
use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Wisata extends Model
{
<<<<<<< HEAD
  use Rateable;

  protected $fillable = ['wisata_name','artikel_id','wisata_gambar','wisata_video','wisata_rating', 'wisata_lokasi', 'wisata_jenis_id','latitude','longtitude'];

  public function artikel()
  {
    return $this->belongsTo('App\Artikel', 'artikel_id');
  }

  public function ulasan()
  {
    return $this->hasMany(Ulasan::class);
  }
=======
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
>>>>>>> 7d8bcbbd1faf9515109da3f1fd23fba952840c8a

    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }
}
