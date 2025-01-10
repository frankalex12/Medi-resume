<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialiteCentre extends Model
{
    use HasFactory;

    protected $fillable = [
        'specialite_id',
        'centre_de_sante_id'
    ];
    public function specialite()
    {
        return $this->belongsTo(Specialite::class);
    }
}
