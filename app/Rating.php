<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
      'wisata_id', 'user_id', 'rating'
    ];
}
