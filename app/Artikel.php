<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = ['artikel'];

    public function getShortArticleAttribute()
    {
        $strip = strip_tags($this->artikel);
        return str_limit($strip, 200, '....');
    }
}
