<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class consultation extends Model
{
    use HasFactory;

    protected $fillable = [ 'motif','amnese','diagnostique','Prescription','patient_id','personnel_id','centre_de_sante_id' ];

    function hopital(){

        return $this->belongsTo(CentreDeSante::class,'centre_de_sante_id');

    }
    function professionnel(){

        return $this->belongsTo(Personnels::class,'personnel_id');

    }
    function malade(){

        return $this->belongsTo(patient::class,'patient_id');

    }
}
