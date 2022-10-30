<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function detail()
    {
        return $this->hasMany(Detail::class);
    }

    public function alur()
    {
        return $this->hasMany(Alur::class);
    }

    public function contact()
    {
        return $this->hasMany(Contact::class);
    }

    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }

    public function informasi()
    {
        return $this->hasMany(informasi::class);
    }

    public function kapus()
    {
        return $this->hasMany(Kapus::class);
    }

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class);
    }

    public function pelayanan()
    {
        return $this->hasMany(Pelayanan::class);
    }

    public function sekber()
    {
        return $this->hasMany(Sekber::class);
    }

    public function standar()
    {
        return $this->hasMany(Standar::class);
    }

    public function swipper()
    {
        return $this->hasMany(Swipper::class);
    }
    
}
