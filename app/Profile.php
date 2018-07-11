<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
      'user_id',
      'profile_gambar',
      'profile_tglLahir',
      'profile_telepon',
      'profile_alamat'
    ];

    public function user()
    {
      return $this->belongsTo(Profile::class);
    }
}
