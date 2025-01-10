<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conpte extends Model
{
    use HasFactory;

    protected $fillable = [

        'affectation_id',
        'personnel_id',
        'centre_de_sante_id'
    ];
  function centress(){

    return $this->belongsTo(CentreDeSante::class);

  }


}
