<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quatier extends Model
{
    use HasFactory;

    protected $fillable = ['ville_id', 'name'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function getName()
    {
        return $this->attributes['name'];
    }
    public function getVille_id()
    {
        return $this->attributes['ville_id'];
    }

    public function setName($name)
    {
        return $this->attributes['name'] = $name;
    }
    public function setVille_id($ville_id)
    {
        return $this->attributes['ville_id'] = $ville_id;
    }

    public function quartier()
    {
        return $this->belongsTo(Ville::class,'quartier_id');
    }
}
