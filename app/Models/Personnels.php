<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnels extends Model
{
    use HasFactory;
    // protected $primaryKey = 'personnel_id';

    protected $fillable = [
        'nom',
        'naissance',
        'Sexe',
        'postal',
        'user_id',
        'identification_professionnelle',
        'specialite_id'
    ];
    public function specialite()
    {
        return $this->belongsTo(Specialite::class);
    }
    function user(){

        return $this->belongsTo(User::class);
    }
    function formations(){

        return $this->hasMany(Formation::class,'personnel_id');
    }
    function centres() {

        return $this->belongsToMany(CentreDeSante::class,'affectations','personnel_id','centre_de_sante_id');

    }
    function consultations(){

        return $this->hasMany(consultation::class,'personnel_id');

    }

}
