<?php

namespace App\Http\Controllers;

use App\Mail\redirectionhopital;
use App\Models\CentreDeSante;
use App\Models\patient;
use App\Models\Pays;
use App\Models\Personnels;
use App\Models\Quatier;
use App\Models\SousCategorie;
use App\Models\Specialite;
use App\Models\SpecialiteCentre;
use App\Models\telephone;
use App\Models\User;
use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class HopitalController extends Controller
{
    ##########################################################################################

    public function index()
    {
        return view('Admin.centre.index', ['centres' => CentreDeSante::all()]);
    }
    ##########################################################################################

    function create()
    {

        return view('CentredeSante.register.Register', ['title' => 'hopital/create']);
    }

    ##########################################################################################

    function store(Request $request)
    {

        $request->validate([
            'nom' => 'required',
            'telephone' => 'required|numeric',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'Confirmationpassword' => 'required|min:8',

        ]);

        if ($request->password == $request->Confirmationpassword) {

            dd($request);

            try {

                $identifiant = date('Y') . 'CH' . mt_rand(1000000, 9999999);

                $hopital = User::create([

                    "name" => $request->nom,
                    "email" => $request->email,
                    "password" => Hash::make($request->password),
                    "identifiant" =>  $identifiant,
                    "role" => 'hopital',
                    "status" => 'actif'
                ])->id;
                telephone::create([
                    'numero' => $request->telephone,
                    'user_id' => $hopital
                ]);
            } catch (\Throwable $th) {

                return back()->with('errorEmail', ' Cette adresse email existe deja');
            }

            $infos = [
                'nom' => $request->nom,
                "identifiant" =>  $identifiant,

            ];

            Auth::loginUsingId($hopital);
            // dd($hopital);

            return to_route('hopitals.continu.create');
        } else {

            return to_route('hopital.register');
        }
    }
    ##########################################################################################

    function continuCreate()
    {

        return view(
            'CentredeSante.register.continu-register',

            [
                'pays' => Pays::all(),
                'souscategories' => SousCategorie::all(),
                'quartiers' => Quatier::all(),
                'villes' => Ville::all(),
                'specialites' => Specialite::all()
            ]
        );
    }
    ##########################################################################################

    function continuStore(Request $request)
    {

        $hopital = CentreDeSante::create(
            [
                'user_id' => Auth::user()->id,
                'name' => Auth::user()->name,
                'telephone_responsable' => $request->telephone,
                'name_responsable' => $request->nom,
                'Localisation'  => $request->localisation,
                'email_responsable' => $request->email,
                'Numero_identification'  => $request->numeroid,
                'code_postal' => $request->code,
                'ville_id' => $request->ville,
                'pay_id' => $request->pays,
                'sous_categorie_id' => $request->categorie,
                'confirmation_concentement' => 1
                //   =>$request->specialite

            ]

        )->id;

        foreach ($request->specialites as $specialite) {

            SpecialiteCentre::create(
                [
                    'specialite_id' => $specialite,
                    'centre_de_sante_id' => $hopital
                ]

            );
        }
        // dd(User::find($hopital->id));

        // Mail::to($request->email)->send(new redirectionhopital($infos));
        Auth::logout();

        return to_route('hopitals.indic');
    }
    ##########################################################################################


    function indicatif()
    {

        return view('CentredeSante.register.IndicMail');
    }

    ##########################################################################################

    function hopital()
    {

        return view('CentredeSante.dashboard', ['centre' =>Auth::user()->centre]);
    }
    ##########################################################################################
    function show($id)
    {

        return view('CentredeSante.show', ['centre' => CentreDeSante::findOrFail($id)]);
    }
    ##########################################################################################

    public function showPersonnel($id)
    {


        return view('Admin.Users.personnels.show',
            [
                'personnel' => Personnels::findOrFail($id),

                "title" => 'show-personnel',

            ]
        );
    }

    public function showPatient($id)
    {
       return view('CentredeSante.patients.show', [ 'patient' => patient::findOrFail($id)]);

    }

    // admin.hopitals.showPatient
}
