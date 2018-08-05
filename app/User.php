<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use willvincent\Rateable\Rating;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function is_admin()
    {
        if ($this->admin) {
            return true;
        }
        return false;
    }

    /**
     * Mengembalikan string url ketika sudah login.
     * Fungsin ini akan cek jika admin maka kembalikan url ke dashboard,
     * jika tidak kembalikan url ke halaman utama (root)
     *
     * @return void
     */
    public function redirectUrlAfterLogin()
    {
        return $this->admin ? route('dashboard') : route('index');
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function gallery()
    {
        return $this->hasOne(Gallery::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
