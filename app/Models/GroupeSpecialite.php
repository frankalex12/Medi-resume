<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupeSpecialite extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function getName()
    {
        return $this->attributes['name'];
    }


    public function setName($name)
    {
        return $this->attributes['name'] = $name;
    }


    public function specialites()
    {
        return $this->hasMany(Specialite::class);
    }
}
