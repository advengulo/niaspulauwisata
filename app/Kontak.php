<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    protected $fillable = ['name', 'email', 'topik', 'pesan'];
    protected $dates = ['created_at'];
}
