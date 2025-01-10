<?php

namespace App\Http\Controllers\Centre;

use App\Http\Controllers\Controller;
use App\Models\Affectation;
use App\Models\Conpte;
use App\Models\Personnels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonnelsController extends Controller
{
    function index()
    {

        return view('CentredeSante.personnels.index', ['personnels'=>Auth::user()->centre->personnels]);
    }

    #########################################################################################
    function add()
    {

        return view('CentredeSante.personnels.add', ['personnels' => Personnels::all()]);
    }


    ########################################################################################
    function affecter(Request $request)
    {

        if (Auth::check()) {

            $affectation = Affectation::create(
                [
                    'status' => 'actif',
                    'personnel_id' => $request->personnel,
                    'centre_de_sante_id' => Auth::user()->centre->id
                ]
            )->id;

            Conpte::create(
                [
                    'affectation_id' => $affectation,
                    'personnel_id' => $request->personnel,
                    'centre_de_sante_id' => Auth::user()->centre->id
                ]
            );

            return to_route('hopitals.home.personnel');
        }
        return back()->with('erreur', 'vous n\' etes pas connectez');
    }


}
