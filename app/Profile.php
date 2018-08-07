<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id',
        'pro_sampulImg',
        'pro_tempatLahir',
        'pro_tglLahir',
        'pro_jenisKelamin',
        'pro_telp',
        'pro_alamat',
    ];

    public function user()
    {
        return $this->belongsTo(Profile::class);
    }
}
