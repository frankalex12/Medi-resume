<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;

    protected $fillable = [

        'user_id',
        'cni',
        'naissance',
        'GroupeSanguin',
        'profession',
        'numeroprevenir',
        'sexe',
        'pay_id',
        'ville_id',
        'quatier_id',
        'localisation',
    ];
    function user(){

        return $this->belongsTo(User::class);

    }
    function quatier(){

        return $this->belongsTo(Quatier::class);

    }
    function allergies(){

        return $this->hasMany(Allergie::class);

    }
    function antecedents(){

        return $this->hasMany(AntecedentMedical::class);

    }
    function parametres(){

        return $this->hasMany(parametre::class);

    }

    function consultations(){

        return $this->hasMany(consultation::class,'patient_id');
    }
}
