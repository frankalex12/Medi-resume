<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $fillable = ['pay_id', 'name'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function getName()
    {
        return $this->attributes['name'];
    }
    public function getPay_id()
    {
        return $this->attributes['pay_id'];
    }

    public function setName($name)
    {
        return $this->attributes['name'] = $name;
    }
    public function setPay_id($pay_id)
    {
        return $this->attributes['pay_id'] = $pay_id;
    }

    public function pays()
    {
        return $this->belongsTo(Pays::class,'pay_id');
    }
}
