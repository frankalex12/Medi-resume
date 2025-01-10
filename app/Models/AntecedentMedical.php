<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntecedentMedical extends Model
{
    use HasFactory;

    protected $fillable =['name','patient_id'];

    public function setName($id)
    {
            return $this->attributes['name'] = $id;
    }

}
