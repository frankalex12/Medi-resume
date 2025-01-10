<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;

    protected $fillable = ['region_id', 'name'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function getName()
    {
        return $this->attributes['name'];
    }
    public function getRegion_id()
    {
        return $this->attributes['region_id'];
    }

    public function setName($name)
    {
        return $this->attributes['name'] = $name;
    }
    public function setRegion_id($region_id)
    {
        return $this->attributes['region_id'] = $region_id;
    }

    public function departements()
    {
        return $this->hasMany(Ville::class);
    }
}
