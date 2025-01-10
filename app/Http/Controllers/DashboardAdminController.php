<?php

namespace App\Http\Controllers;

use App\Models\CentreDeSante;
use App\Models\patient;
use App\Models\Personnels;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    function index(){

      return view('Admin.statistique',
      ['patient'=>patient::all(),
      'personnel'=>Personnels::all(),
      'hopital'=>CentreDeSante::all()]);

    }
}
