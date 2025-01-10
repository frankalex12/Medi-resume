<?php

namespace App\Http\Controllers\Centre;

use App\Http\Controllers\Controller;
use App\Models\consultation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsultationCentreController extends Controller
{
   function index() {

    return view('CentredeSante.consultations.index', ['consultations'=> Auth::user()->centre->consultations]);

   }
}
