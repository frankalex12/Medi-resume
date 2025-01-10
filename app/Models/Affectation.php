<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'personnel_id',
        'centre_de_sante_id'
    ];

    function centres() {

        return $this->belongsToMany(CentreDeSante::class);
    }
}
