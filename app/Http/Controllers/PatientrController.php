<?php

namespace App\Http\Controllers;

use App\Models\patient;
use Illuminate\Http\Request;

class PatientrController extends Controller
{
    function home(){

        return view('Users.Acuiel');
    }
    function adminPatient(){

        return view('Admin.Users.Patients.index', [ 'patients' => patient::all()]);
    }
    function showadminPatient($id){

        return view('Admin.Users.Patients.show', [ 'patient' => patient::findOrFail($id)]);
    }
}
