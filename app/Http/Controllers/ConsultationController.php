<?php

namespace App\Http\Controllers;

use App\Models\consultation;
use App\Models\patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsultationController extends Controller
{
    function index(){

        return view('Users.consultation.index', ['consultations'=>Auth::user()->patient]);

    }
    function destroy($id){

        return back();

    }

    function show($id){

        return view('Users.consultation.show', ['consultation'=>consultation::findOrFail($id)]);

    }

}
