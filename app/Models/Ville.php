<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;

    protected $fillable = ['departement_id', 'name'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function getName()
    {
        return $this->attributes['name'];
    }
    public function getDepartement_id()
    {
        return $this->attributes['departement_id'];
    }

    public function setName($name)
    {
        return $this->attributes['name'] = $name;
    }
    public function setDepartement_id($departement_id)
    {
        return $this->attributes['departement_id'] = $departement_id;
    }

    public function quatiers()
    {
        return $this->belongsTo(Quatier::class);
    }

}
