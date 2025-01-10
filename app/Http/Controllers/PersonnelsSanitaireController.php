<?php

namespace App\Http\Controllers;

use App\Mail\redirectionhopital;
use App\Models\Formation;
use App\Models\Personnels;
use App\Models\Specialite;
use App\Models\telephone;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class PersonnelsSanitaireController extends Controller
{
    public function index()
    {
        return view('Admin.Users.personnels.index', ['personnels' => Personnels::all()]);
    }

    public function create()
    {
        return view('Admin.Users.personnels.create', ['specialites' => Specialite::all()]);
    }

    public function store(Request $request)
    {

        // dd($request);

        $request->validate([
            'nom' => 'required',
            'naissance' => 'required',
            'sexe' => 'required',
            'postal' => 'required',
            'email' => 'required',
            'numero' => 'required',
            'specialite' => 'required',
            'diplome' => 'required',
            'ecole' => 'required',
            'ddebut' => 'required',
            'dfin' => 'required'

        ]);

        try {



            $identifiant = date('Y') . 'PS' . mt_rand(10000000, 99999999);

            $user = User::create([

                'name' => $request->nom,
                'email' => $request->email,
                "identifiant" =>  $identifiant,
                "role" => 'personnel',
                'password' => Hash::make('000000000'),
                'status' => 'actif',

            ])->id;



            if ($request->hasFile('profil')) {
                $imageName = $user . "." . $request->file('profil')->extension();
                Storage::disk('public')->put($imageName, file_get_contents($request->file('profil')->getRealPath()));
                $profil = User::find($user)->profil = $imageName;
            }



            $personnel = Personnels::create([
                'nom' => $request->nom,
                'naissance' => $request->naissance,
                'Sexe' => $request->sexe,
                'postal' => $request->postal,
                'user_id' => $user,
                'identification_professionnelle' => $request->identificationpro,
                'specialite_id' => $request->specialite

            ])->id;

            $telephone = telephone::create([

                'numero' => $request->numero,
                'user_id' => $user

            ]);

            $formation = Formation::create(

                [
                    'diplome' => $request->diplome,
                    'ecole' => $request->ecole,
                    'andebut' => $request->ddebut,
                    'anfin' => $request->dfin,
                    'personnel_id' => $personnel

                ]

            );

            return to_route('personnels.index');
        } catch (\Throwable $th) {

            return back()->withErrors('message', 'cette email ou ce nom existe deja');
        }
    }

    public function show($id)
    {


        return view('Admin.Users.personnels.show',
            [
                'personnel' => Personnels::findOrFail($id),

                "title" => 'show-personnel',

            ]
        );
    }
}
