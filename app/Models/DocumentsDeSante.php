<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentsDeSante extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'patient_id',
    ];
}
