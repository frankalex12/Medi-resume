<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SousCategorie extends Model
{
    use HasFactory;


    protected $fillable = ['categorie_id', 'name'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function getName()
    {
        return $this->attributes['name'];
    }
    public function getcategorie_id()
    {
        return $this->attributes['categorie_id'];
    }

    public function setName($name)
    {
        return $this->attributes['name'] = $name;
    }
    public function setCategorie_id($categorie_id)
    {
        return $this->attributes['categorie_id'] = $categorie_id;
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class,'categorie_id');
    }
}
