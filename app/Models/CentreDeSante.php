<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentreDeSante extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'telephone_responsable',
        'name_responsable',
        'Localisation',
        'email_responsable',
        'Numero_identification',
        'code_postal',
        'ville_id',
        'pay_id',
        'sous_categorie_id',
        'name',
        'confirmation_concentement'
    ];



    function personnels() {

        return $this->belongsToMany(Personnels::class,'affectations','centre_de_sante_id','personnel_id');

    }
    function user() {

        return $this->belongsTo(User::class,'user_id');

    }
    function specialites(){

        return $this->hasMany(SpecialiteCentre::class);
    }
    public function villes()
    {
        return $this->belongsTo(Ville::class,'ville_id');
    }
    public function pays()
    {
        return $this->belongsTo(Pays::class,'pay_id');
    }
    function consultations(){

        return $this->hasMany(consultation::class);
    }


}
