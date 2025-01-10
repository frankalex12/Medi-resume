<?php

namespace App\Http\Controllers;

use App\Models\Allergie;
use App\Models\parametre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Parametrescontroller extends Controller
{
    function index()
    {

        return view('Users.parametre.index');
    }
    function create(Request $request)
    {
        return view('Users.parametre.add');
    }
    function store(Request $request)
    {

        // dd($request);

        parametre::create(
            [ 'poids'=>$request->poids,
            'taille'=>$request->taille,
            'tension'=>$request->tension,
            'temperature'=>$request->temperature,
            'cardiaque'=>$request->cardiaque,
            'respiratoire'=>$request->respiratoire,
            'patient_id'=>Auth::user()->patient->id
            ]
        );

        return to_route('parametre.index');
    }
}
