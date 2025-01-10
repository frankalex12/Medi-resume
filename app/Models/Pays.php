<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    use HasFactory;

    protected $fillable = ['name','flag','code'];
    public function getId()
    {
            return $this->attributes['id'];
    }

    public function getName()
    {
            return $this->attributes['name'];
    }
    public function getFlag()
    {
            return $this->attributes['flag'];
    }
    public function getCode()
    {
            return $this->attributes['code'];
    }

    public function setName($name)
    {
            return $this->attributes['name'] =$name;
    }
    public function setFlag($flag)
    {
            return $this->attributes['flag']=$flag;
    }
    public function setCode($code)
    {
            return $this->attributes['code'] = $code;
    }
    public function regions()
    {
            return $this->hasMany(Region::class);
    }
}
