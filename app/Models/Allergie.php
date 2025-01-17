<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergie extends Model
{
    use HasFactory;

    protected $fillable = [ 'name', 'patient_id'];
    public function getId()
    {
            return $this->attributes['id'];
    }

    public function getName()
    {
            return $this->attributes['name'];
    }
    public function setName($id)
    {
            return $this->attributes['name'] = $id;
    }
}
