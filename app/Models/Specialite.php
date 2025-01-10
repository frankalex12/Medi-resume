<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialite extends Model
{
    use HasFactory;

    protected $fillable = ['groupe_specialite_id', 'name'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function getName()
    {
        return $this->attributes['name'];
    }
    public function getGroupe_specialite_id()
    {
        return $this->attributes['groupe_specialite_id'];
    }

    public function setName($name)
    {
        return $this->attributes['name'] = $name;
    }
    public function setGroupe_specialite_id($groupe_specialite_id)
    {
        return $this->attributes['groupe_specialite_id'] = $groupe_specialite_id;
    }

    public function paysgroupe_specialite()
    {
        return $this->belongsTo(GroupeSpecialite::class);
    }



}
