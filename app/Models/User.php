<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
        'identifiant',
        'role',
        'status',
        'profil'
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
    function telephones(){

        return $this->hasMany(telephone::class);

    }
    function centre(){

        return $this->hasOne(CentreDeSante::class);
    }
    function user(){

        return $this->hasOne(patient::class);

    }
    function patient(){

        return $this->hasOne(patient::class);

    }
    function personnelsante(){

        return $this->hasOne(Personnels::class);

    }

    // function consutationPatients(){

    //     return $this->hasManyThrough(consultation::class,patient::class);

    // }

}
