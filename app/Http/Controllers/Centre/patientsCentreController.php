<?php

namespace App\Http\Controllers\Centre;

use App\Http\Controllers\Controller;
use App\Models\patient;
use Illuminate\Http\Request;

class patientsCentreController extends Controller
{
    function index(){

        return view('CentredeSante.patients.index', ['patients' =>patient::all()]);
    }
}
